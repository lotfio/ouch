<?php

/**
 * Ouch error handler for PHP.
 *
 * @author      Lotfio Lakehal <lotfiolakehal@gmail.com>
 * @copyright   2018 Lotfio Lakehal
 * @license     MIT
 *
 * @link        https://github.com/lotfio/ouch
 */

namespace Ouch;

class View
{
    /**
     * render view method.
     *
     * @param string $file view file name
     * @param object $ex   exception
     *
     * @return void
     */
    public static function render($file, $ex) : void
    {
        // TODO create a nice cli view
        if (php_sapi_name() === 'cli') {
            exit(json_encode($ex));
        }

        http_response_code(500);
        $view = require ouch_views($file);

        die(
            $view
        );
    }
}
