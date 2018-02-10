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
    function readErrorFile($file, $line)
    {
        $file = new SplFileObject($file);

        $start = 1;
    
        if($line >= 10) // if file is more than 10 lines
        {
            $start = $line - 5;
    
            $file->seek($start);
        }
    
        while (!$file->eof()) {
    
            if($start >= $line + 6) break; // end reading
            
            if($start == 1){ $start +=1; echo "&lt;?php\n";}

            echo $start . " - " . htmlspecialchars(trim($file->fgets(), '<?php'), ENT_QUOTES, 'UTF-8');

            $start++;
        }
    
    
        $file = null;
    }
}
