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
    public static function render($file, $ex)
    {
        //TODO create error veiws for booath fatal and exception
        //TODO since boath have diffrent return type

        // test
        var_dump($ex);
    }
}