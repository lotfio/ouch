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
if (!function_exists('ouch_root')) {

    /**
     * root() directory function.
     *
     * @return string root dir path
     */
    function ouch_root()
    {
        return dirname(__DIR__).DIRECTORY_SEPARATOR;
    }
}

if (!function_exists('ouch_assets')) {
    /**
     * assets() function path.
     *
     * @param null $file
     *
     * @return string
     */
    function ouch_assets($file = null)
    {
        return ouch_root().'resources'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.$file;
    }
}

if (!function_exists('ouch_views')) {
    /**
     * views() function path.
     *
     * @param null $file
     *
     * @return string
     */
    function ouch_views($file = null)
    {
        return ouch_root().'resources'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$file;
    }
}

if (!function_exists('str_last')) {
    /**
     * get last word from a string.
     *
     * @param string $str string
     * @param string $del delimiter
     *
     * @return void
     */
    function str_last($str, $del = '\\')
    {
        $str = explode($del, $str);

        return $str[count($str) - 1];
    }
}

if (!function_exists('unpackError')) {
    /**
     * recursively unpack exception.
     *
     * @param array $array
     *
     * @return string
     */
    function unpackError($array)
    {
        $out = '';
        foreach ($array as $key => $value) {
            if (!is_array($value)) {
                $out .= '<li>'.$value.'</li>';
            } else {
                $out .= unpackError($value);
            }
        }

        return $out;
    }
}

if (!function_exists('readErrorFile')) {
    /**
     * read error file function.
     *
     * @param string $file error file
     * @param int    $line error line
     *
     * @return void
     */
    function readErrorFile($file, $line)
    {
        $file = new SplFileObject($file);
        $file->fseek(1); // remove < to disable php from execution

        $start = 1;

        if ($line >= 10) {
            $start = $line - 7;
            $file->seek($start);
        } // if long file seek 7 lines before error

        while (!$file->eof()) {
            if ($start >= $line + 5) {
                break;
            } // break if long file

            // remove php tag and add &lt;
            if ($start == 1) {
                echo '&lt;'.$file->fgets();
                $start++;
                continue;
            }

            // if line > 10 jump two steps to slove seek problem else count normally
            if ($line >= 10) {
                echo $start + 2 .' - '.$file->fgets();
            } else {
                echo $start.' - '.$file->fgets();
            }

            $start++;
        }

        $file = null;
    }
}
