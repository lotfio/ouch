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
        throw new \ErrorException($msg, 500, $type, $file, $line);
    }

    /**
     * exceptions handler
     *
     * @param $exception
     */
    public function exceptionHandler($exception)
    {
        View::render('500.php', $exception);
        http_response_code(500);
    }

    /**
     * fatal error handler
     */
    public function fatalErrorHandler()
    {
        $errors  = error_get_last();
        if(is_array($errors))
        {
            View::render('fatal.php', $errors);
            http_response_code(500);
            exit(1);
        }
    }
}