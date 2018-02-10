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
     * custom error handler 
     * 
     * @param  int    $type [description]
     * @param  string $msg  [description]
     * @param  string $file [description]
     * @param  int    $line [description]
     * @return [type]       [description]
     */
    public function errorHandler(int $type, string $msg, string $file, int $line)
    {
        print_r($msg);
    }

    /**
     * exceptions handler
     *
     * @param $exception
     */
    public function exceptionHandler($exception)
    {   
        print_r($exception);
    }

}