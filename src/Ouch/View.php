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
     * write line method
     *
     * @param string $line
     * @param integer $color
     * @param integer $bg
     * @param integer $bold
     * @return void
     */
    public static function writeLn($line, $color = 37, $bg = 48, $bold = 0)
    {
        return fwrite(STDOUT,"\e[".$bold.';'.$color.';'.$bg.'m'.$line."\e[0m");
    }
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
       if (php_sapi_name() === 'cli') { // if cli

            self::writeLn("\n   ");
            self::writeLn(" => ".$ex->class . " ", "37", "41", '3');
            self::writeLn("\n\n          ");
            self::writeLn(($ex->message), "32");

            self::writeLn("\n\n   ");
            self::writeLn(" => At    : ", "33");
            self::writeLn($ex->file , "32");

            self::writeLn("\n   ");
            self::writeLn(" => Line  : ", "33");
            self::writeLn($ex->line, "32");

            self::writeLn("\n\n");


            self::writeLn(rtrim(readErrorFile($ex->file, $ex->line, FALSE)));

            self::writeLn("\n\n    => Code  :  ", "33");
            self::writeLn(($ex->type), "32");

            self::writeLn("\n    => Trace :  ", "33");
            self::writeLn(json_encode($ex->trace), "32");
            self::writeLn("\n");

            die;
        } 
        
        // if http
        http_response_code(500);
        $view = require ouch_views($file);

        die(
            $view
        );
    }
}
