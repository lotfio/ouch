<?php

declare(strict_types=1);

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

class Reporter
{
    /**
     * @var HandlersSetter
     */
    private $handler;

    /**
     * Recorder constructor.
     */
    public function __construct()
    {
        ini_set('display_errors', '0'); // prevent error duplication on fatal
        $this->handler = new HandlersSetter(new Handlers());
    }

    /**
     * enable ouch error handler.
     *
     * @return $this
     */
    public function on() : self
    {
        $this->handler->setErrorHandler();
        $this->handler->setExceptionHandler();
        $this->handler->setFatalHandler();

        return $this;
    }

    /**
     * disable ouch error handler
     * and restore default error handler.
     *
     * @return void
     */
    public function off() :void
    {
        $this->handler->restoreErrorHandler();
        $this->handler->restoreExceptionHandler();
    }
}
