<?php

/**
 * Ouch error handler for PHP
 *
 * @package     Ouch
 * @author      Lotfio Lakehal <lotfiolakehal@gmail.com>
 * @copyright   2018 Lotfio Lakehal
 * @license     MIT
 * @link        https://github.com/lotfio-lakehal/ouch
 */

namespace Ouch\Core;

use Ouch\Exceptions;

class Handlers implements HandlersInterface
{
    /**
     * @param int $type
     * @param string $msg
     * @param string $file
     * @param int $line
     * @return mixed|void
     * @throws \ErrorException
     */
    public function errorHandler(int $type, string $msg, string $file, int $line)
    {
        switch ($type)
        {
            case E_ERROR             : throw new \ErrorException($msg, 0, $type, $file, $line);
            case E_WARNING           : throw new Exceptions\WarningException($msg, 0, $type, $file, $line);
            case E_PARSE             : throw new Exceptions\ParseException($msg, 0, $type, $file, $line);
            case E_NOTICE            : throw new Exceptions\NoticeException($msg, 0, $type, $file, $line);
            case E_CORE_ERROR        : throw new Exceptions\CoreErrorException($msg, 0, $type, $file, $line);
            case E_CORE_WARNING      : throw new Exceptions\CoreWarningException($msg, 0, $type, $file, $line);
            case E_COMPILE_ERROR     : throw new Exceptions\CompileErrorException($msg, 0, $type, $file, $line);
            case E_COMPILE_WARNING   : throw new Exceptions\CoreWarningException($msg, 0, $type, $file, $line);
            case E_USER_ERROR        : throw new Exceptions\UserErrorException($msg, 0, $type, $file, $line);
            case E_USER_WARNING      : throw new Exceptions\UserWarningException($msg, 0, $type, $file, $line);
            case E_USER_NOTICE       : throw new Exceptions\UserNoticeException($msg, 0, $type, $file, $line);
            case E_STRICT            : throw new Exceptions\StrictException($msg, 0, $type, $file, $line);
            case E_RECOVERABLE_ERROR : throw new Exceptions\RecoverableErrorException($msg, 0, $type, $file, $line);
            case E_DEPRECATED        : throw new Exceptions\DeprecatedException($msg, 0, $type, $file, $line);
            case E_USER_DEPRECATED   : throw new Exceptions\UserDeprecatedException($msg, 0, $type, $file, $line);
        }
    }

    /**
     * exceptions handler
     *
     * @param $exception
     */
    public function exceptionHandler($exception)
    {   
        http_response_code(500);
        View::render('500.php', $exception);
        exit(0);
    }

    /**
     * fatal error handler
     */
    public function fatalErrorHandler()
    {
        $errors  = error_get_last();

        if(is_array($errors))
        {
            http_response_code(500);
            View::render('fatal.php', $errors);
            exit(0);
        }
    }
}