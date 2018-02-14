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
     * errors repo
     * 
     * @var array
     */
    private $errors =  array();

    /**
     * custom error handler 
     * 
     * @param  int    $type error type
     * @param  string $msg  error message
     * @param  string $file error file
     * @param  int    $line error line
     * @return void throw Exception
     */
    public function errorHandler(int $type, string $message, string $file, int $line)
    {
        $this->whichError($message, $type, $file, $line);
    }

    /**
     * exception handler
     *
     * @param object $e exception object
     * @return void throw exception based on the error type
     */
    public function exceptionHandler($e)
    {   
        $this->setError(
            (int)    $e->getCode(),
            (string) $e->getMessage(),
            (string) $e->getFile(),
            (int)    $e->getLine(),
            (string) get_class($e),
            $e->getTrace()
        );

        //TODO render template on exception error
        http_response_code(500);
        return renderView('500.php', (object) $this->errors);
    }

    /**
     * error handler method
     *
     * @return void
     */
    public function fatalHandler()
    {
        $errors = error_get_last();
        if(is_array($errors))
        {
            $this->setError(
               (int)     $errors['type'],
                (string) $errors['message'],
                (string) $errors['file'],
                (int)    $errors['line'],
                "FatalErrorException"
            );

            //TODO render template on exception error
            http_response_code(500);
            return renderView('500.php', (object) $this->errors);
        }
    }

    /**
     * register error on errors array
     * 
     * @param int    $type    error type
     * @param string $message error message
     * @param string $file    error file
     * @param int    $line    error line
     */
    public function setError(int $type, string $message,  string $file, int $line, string $class, array $trace = array()) : array
    {   
       return $this->errors = array(
            "type"    => $type,
            "message" => $message,
            "file"    => $file,
            "line"    => $line,
            "class"   => $class,
            "trace"   => $trace
        );
    }


    /**
     * determine error type and throw exception
     *
     * @param string $message error message
     * @param integer $type error type
     * @param string  $file error file
     * @param integer $line error line
     * @return void
     */
    public function whichError(string $message, int $type, string $file, int $line)
    {
        switch ($type) {
            case E_ERROR            : throw new Exceptions\ErrorException($message, $type, $type, $file, $line);
            case E_WARNING          : throw new Exceptions\WarningException($message, $type, $type, $file, $line);
            case E_PARSE            : throw new Exceptions\ParseErrorException($message, $type, $type, $file, $line);
            case E_NOTICE           : throw new Exceptions\NoticeException($message, $type, $type, $file, $line);
            case E_CORE_ERROR       : throw new Exceptions\CoreErrorException($message, $type, $type, $file, $line);
            case E_CORE_WARNING     : throw new Exceptions\CoreWarningException($message, $type, $type, $file, $line);
            case E_COMPILE_ERROR    : throw new Exceptions\CompileErrorException($message, $type, $type, $file, $line);
            case E_COMPILE_WARNING  : throw new Exceptions\CompileWarningException($message, $type, $type, $file, $line);
            case E_USER_ERROR       : throw new Exceptions\UserErrorException($message, $type, $type, $file, $line);
            case E_USER_WARNING     : throw new Exceptions\UserWarningException($message, $type, $type, $file, $line);
            case E_USER_NOTICE      : throw new Exceptions\UserNoticeException($message, $type, $type, $file, $line);
            case E_STRICT           : throw new Exceptions\StrictErrorException($message, $type, $type, $file, $line);
            case E_RECOVERABLE_ERROR: throw new Exceptions\RecoverableErrorException($message, $type, $type, $file, $line);
            case E_DEPRECATED       : throw new Exceptions\DepricatedException($message, $type, $type, $file, $line);
            case E_USER_DEPRECATED  : throw new Exceptions\UserDepricatedException($message, $type, $type, $file, $line);
            default                 : throw new Exceptions\ErrorException($message, $type, $type, $file, $line);
        }
    }

}