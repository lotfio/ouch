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

class HandlersSetter
{
    /**
     * @var HandlersInterface
     */
    private $handlers;


    /**
     * HandlersSetter constructor
     *
     * @param HandlersInterface $handlers
     */
    public function __construct(HandlersInterface $handlers)
    {
        $this->handlers = $handlers;
    }

    /**
     * set error Handler
     *
     * @return void
     */
    public function setErrorHandler()
    {
        return set_error_handler([$this->handlers, "errorHandler"]);
    }

    /**
     * set exception handler
     *
     * @return void
     */
    public function setExceptionHandler()
    {
        return set_exception_handler([$this->handlers, "exceptionHandler"]);
    }

    /**
     * restore error handler
     *
     * @return void
     */
    public function restoreErrorHandler()
    {
        restore_error_handler();
    }

    /**
     * restore exception handler
     *
     * @return void
     */
    public function restoreExceptionHandler()
    {
        restore_exception_handler();
    }
}