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
    const DS = DIRECTORY_SEPARATOR;

    public static function render($file, $ex)
    {
        //TODO fix paths
        require dirname(__DIR__) . self::DS . 'resources' . self::DS . 'views' . self::DS . $file;
        return false; //stop execution on first error
    }
}