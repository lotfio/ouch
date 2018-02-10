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
