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
        $this->handler = new HandlersSetter(new Handlers());
        $this->errorReporting = (int) ini_get("error_reporting");
    }

    /**
     * register error handlers
     *
     * @param string $status
     * @param string $level
     */
    public function run($status = "on", $level = "E_ALL")
    {
        //TODO trigger error handlers from here based on the config abouve

        if($this->errorReporting !== 0 && $status == "on" )
        {
            $this->handler->setErrorHandler();
            $this->handler->setExceptionHandler();
            $this->handler->setFatalErrorHandler();
        }
    }

    /**
     * get back error handler
     */
    public function restoreErrorHandler()
    {
        $this->handler->restoreErrorHandler();
    }

    /**
     * get back Exception handler
     */
    public function restoreExceptionHandler()
    {
        $this->handler->restoreExceptionHandler();
    }



}