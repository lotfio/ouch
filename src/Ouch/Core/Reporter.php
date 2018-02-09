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

class Reporter
{
    /**
     * @var HandlersSetter
     */
    public $handler;

    /**
     * @var string
     */
    public $errorReporting;

    /**
     * Recorder constructor.
     */
    public function __construct()
    {
        ini_set("error_reporting", 0);
        $this->handler = new HandlersSetter(new Handlers());
    }

    /**
     * register error handlers
     *
     * @param string $status
     * @param string $level
     */
    public function enable()
    {
        //TODO trigger error handlers from here based on the config abouve
        $this->handler->setErrorHandler();
        $this->handler->setExceptionHandler();
        $this->handler->setFatalErrorHandler();
        return $this;
    }

    /**
     * restore default error handlers
     * @return void
     */
    public function disable()
    {
        $this->restoreErrorHandler();
        $this->restoreExceptionHandler();
    }

    /**
     * get back error handler
     */
    public function restoreErrorHandler()
    {
        $this->handler->restoreErrorHandler();
        return $this;
    }

    /**
     * get back Exception handler
     */
    public function restoreExceptionHandler()
    {
        $this->handler->restoreExceptionHandler();
        return $this;
    }

}