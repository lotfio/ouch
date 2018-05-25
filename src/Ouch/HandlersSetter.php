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

use Ouch\Contracts\HandlersInterface;

class HandlersSetter
{
    /**
     * @var HandlersInterface
     */
    private $handlers;

    /**
     * HandlersSetter constructor.
     *
     * @param HandlersInterface $handlers
     */
    public function __construct(HandlersInterface $handlers)
    {
        $this->handlers = $handlers;
    }

    /**
     * set error Handler.
     *
     * @return void
     */
    public function setErrorHandler() : void
    {
        set_error_handler([$this->handlers, 'errorHandler']);
    }

    /**
     * set exception handler.
     *
     * @return void
     */
    public function setExceptionHandler() : void
    {
        set_exception_handler([$this->handlers, 'exceptionHandler']);
    }

    /**
     * set fatal handler.
     *
     * @return void
     */
    public function setFatalHandler() : void
    {
        register_shutdown_function([$this->handlers, 'fatalHandler']);
    }

    /**
     * restore error handler.
     *
     * @return void
     */
    public function restoreErrorHandler() : void
    {
        restore_error_handler();
    }

    /**
     * restore exception handler.
     *
     * @return void
     */
    public function restoreExceptionHandler() : void
    {
        restore_exception_handler();
    }
}
