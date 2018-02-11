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

if( !function_exists('ds'))
{

    /**
     * ds() directory separator function
     * @return string directory separator
     */
    function ds()
    {
        return DIRECTORY_SEPARATOR;
    }
}

if( !function_exists('root'))
{

    /**
     * root() directory function
     * @return string root dir path
     */
    function root()
    {
        return dirname(__DIR__) . ds();
    }
}

if( !function_exists('assets'))
{
    /**
     * assets() function path
     * @param null $file
     * @return string
     */
    function assets($file = null)
    {
        return root() . 'resources'. ds() .'assets' . ds() . $file;
    }
}

if(! function_exists('renderView'))
{
    /**
     * render view function
     * 
     * @param  string $file   error template file
     * @param  array  $errors errors
     * @return          
     */
    function renderView($file, $errors)
    {
        return Ouch\Core\View::render($file, $errors);
    }
}


if(!function_exists('readErrorFile'))
{
    /**
     * read error file function
     *
     * @param string $file error file
     * @param int    $line error line
     * @return void
     */
    function readErrorFile($file, $line)
    {
        $file = new SplFileObject($file);
        $file->fseek(1); // remove < to disable php from execution

        $start = 1;

        if($line >= 10){ $start = $line - 7; $file->seek($start);} // if long file seek 7 lines before error 

        while (!$file->eof()) {

            if($start >= $line + 5) break; // break if long file

            // remove php tag and add &lt;
            if($start == 1) { echo $start ." - &lt;" . $file->fgets(); $start++; continue;}

            // if line > 10 jump two steps to slove seek problem else count normally
            if($line >= 10){ echo $start + 2 . ' - ' . $file->fgets();} else{
                echo $start  . ' - ' . $file->fgets();
            }

            $start++;
        }
    
        $file = null;
    }
}