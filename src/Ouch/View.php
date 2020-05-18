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
        if ((strpos(php_uname("v"), "Windows 7") === FALSE) ) { // if not windows 7
            $line = "\e[".$bold.';'.$color.';'.$bg.'m'.$line."\e[0m";
        }

        return fwrite(STDOUT, $line);
    }
    
    /**
     * render view method.
     *
     * @param string $file view file name
     * @param object $ex   exception
     *
     * @return void
     */
    public static function render($file, $ex, $env) : void
    {
        ob_get_clean(); // remove html before errors
        if(strtolower($env) === 'pro')
            self::renderProduction();

       if (php_sapi_name() === 'cli') { // if cli

            self::writeLn("\n   ");
            self::writeLn(" => ".$ex->class . " ", "37", "41", '3');
            self::writeLn("\n\n          ");
            self::writeLn(wordwrap($ex->message, 100), "32");

            self::writeLn("\n\n   ");
            self::writeLn(" => File  : ", "33");
            self::writeLn($ex->file , "32");

            self::writeLn("\n   ");
            self::writeLn(" => Line  : ", "33");
            self::writeLn($ex->line, "32");

            self::writeLn("\n\n");


            self::writeLn(rtrim(readErrorFileConsole($ex->file, $ex->line, FALSE)));

            self::writeLn("\n\n    => Code  :  ", "33");
            self::writeLn(($ex->type), "32");

            self::writeLn("\n    => Trace :  ", "33");
            self::writeLn(json_encode(array_slice($ex->trace, 0, 2)), "32");
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

    /**
     * render production
     *
     * @return void
     */
    public static function renderProduction() : void
    {
        if (php_sapi_name() === 'cli')
        {
            die(
                self::writeLn("\n    Ouch ! an error occurred.  \n", "37", "41")
            );
        }

       // if http
       http_response_code(500);
       $view = require ouch_views("501.php");
        die(
            $view
        );
    }
}
