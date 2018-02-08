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

if( !function_exists('css'))
{

    /**
     * css function
     * @param null $file
     * @return string
     */
    function css($file = null)
    {
        return assets('css') . ds() . $file;
    }
}

if( !function_exists('js'))
{

    /**
     * javascript function
     * @param null $file
     * @return string
     */
    function js($file = null)
    {
        return assets('js') . ds() . $file;
    }
}
