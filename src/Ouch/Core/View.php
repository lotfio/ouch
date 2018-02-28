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

class View
{
    /**
     * render view method
     * 
     * @param  string $file view file name
     * @param  object $ex   exception
     * @return   void
     */
    public static function render($file, $ex) : void
    {
        require $file;
        exit(1); //stop execution on first error
    }
}