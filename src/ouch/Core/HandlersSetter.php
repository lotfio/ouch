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
     * HandlersSetter constructor.
     * @param HandlersInterface $handlers
     */
    public function __construct(HandlersInterface $handlers)
    {
        $this->handlers = $handlers;
    }

    /**
     * error handler
     */
    public function setErrorHandler()
    {
        set_error_handler([$this->handlers, "errorHandler"]);
    }

    /**
     * exceptions handler
     */
    public function setExceptionHandler()
    {
        set_exception_handler([$this->handlers, "exceptionHandler"]);
    }

    /**
     * fatal error handler
     */
    public function setFatalErrorHandler()
    {
        register_shutdown_function([$this->handlers, "fatalErrorHandler"]);
    }
}