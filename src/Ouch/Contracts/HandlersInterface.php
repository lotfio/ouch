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

namespace Ouch\Contracts;

interface HandlersInterface
{
    /**
     * error handler callback method
     * will be passed to set_error_handler.
     *
     * @param int    $type
     * @param string $msg
     * @param string $file
     * @param int    $line
     *
     * @return mixed
     */
    public function errorHandler(int $type, string $msg, string $file, int $line);

    /**
     * exception handler callback method
     * will be passed to set_exception_handler.
     *
     * @param \Exception $exception
     *
     * @return mixed
     */
    public function exceptionHandler($exception);

    /**
     * fatal handler callback method
     * will be passed to register_shutdown_function.
     *
     * @return void
     */
    public function fatalHandler();
}
