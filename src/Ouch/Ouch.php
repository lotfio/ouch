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

class Ouch
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
        error_reporting(0); // prevent duplicate on cli
        $this->handler = new HandlersSetter(new Handlers());
    }

    /**
     * enable ouch error handler
     *
     * @param string $env pro | dev
     * @return self
     */
    public function enableErrorHandler(string $env = 'pro') : self
    {
        $this->handler->setEnvirenment($env);
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
    public function disableErrorHandler() :void
    {
        $this->handler->restoreErrorHandler();
        $this->handler->restoreExceptionHandler();
    }
}
