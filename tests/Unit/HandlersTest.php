<?php

namespace Tests\Unit;

use Ouch\Exceptions;
use Ouch\Handlers;
use PHPUnit\Framework\TestCase;

class HandlersTest extends TestCase
{
    /**
     * @var handlers object
     */
    private $handlers;

    /**
     * setUp method set handlers.
     */
    public function setUp()
    {
        $this->handlers = new Handlers();
    }

    /**
     * assert that $handlers object is the right object.
     */
    public function testHndlersObjectIsInstanceOfHandlersClass()
    {
        $this->assertInstanceOf(get_class($this->handlers), new Handlers());
    }

    /**
     * test throw ErrorException.
     */
    public function testWhichErrorMethodIsThrowingErrorException()
    {
        $this->expectException(Exceptions\ErrorException::class);
        $this->handlers->whichError('Error', 1, 'error.php', 15);
    }

    /**
     * test throw CompileErrorException.
     */
    public function testWhichErrorMethodIsThrowingCompileErrorException()
    {
        $this->expectException(Exceptions\CompileErrorException::class);
        $this->handlers->whichError('Compile Error', 64, 'error.php', 15);
    }

    /**
     * test throw CompileWarningException.
     */
    public function testWhichErrorMethodIsThrowingCompileWarningException()
    {
        $this->expectException(Exceptions\CompileWarningException::class);
        $this->handlers->whichError('Compile Warning', 128, 'error.php', 15);
    }

    /**
     * test throw CoreErrorException.
     */
    public function testWhichErrorMethodIsThrowingCoreErrorException()
    {
        $this->expectException(Exceptions\CoreErrorException::class);
        $this->handlers->whichError('Core Error', 16, 'error.php', 15);
    }

    /**
     * test throw CoreWarningException.
     */
    public function testWhichErrorMethodIsThrowingCoreWarningException()
    {
        $this->expectException(Exceptions\CoreWarningException::class);
        $this->handlers->whichError('Core Warning', 32, 'error.php', 15);
    }

    /**
     * test throw DeprecatedException.
     */
    public function testWhichErrorMethodIsThrowingDepricatedException()
    {
        $this->expectException(Exceptions\DepricatedException::class);
        $this->handlers->whichError('Depricated', 8192, 'error.php', 15);
    }

    /**
     * test throw NoticeException.
     */
    public function testWhichErrorMethodIsThrowingNoticeException()
    {
        $this->expectException(Exceptions\NoticeException::class);
        $this->handlers->whichError('Notice', 8, 'error.php', 15);
    }

    /**
     * test throw ParseErrorException.
     */
    public function testWhichErrorMethodIsThrowingParseErrorException()
    {
        $this->expectException(Exceptions\ParseErrorException::class);
        $this->handlers->whichError('Parse Error', 4, 'error.php', 15);
    }

    /**
     * test throw RecoverableErrorException.
     */
    public function testWhichErrorMethodIsThrowingRecoverableErrorException()
    {
        $this->expectException(Exceptions\RecoverableErrorException::class);
        $this->handlers->whichError('Recoverable Error', 4096, 'error.php', 15);
    }

    /**
     * test throw StrictErrorException.
     */
    public function testWhichErrorMethodIsThrowingStrictErrorException()
    {
        $this->expectException(Exceptions\StrictErrorException::class);
        $this->handlers->whichError('Strict Error', 2048, 'error.php', 15);
    }

    /**
     * test throw UserDeprecatedException.
     */
    public function testWhichErrorMethodIsThrowingUserDeprecatedException()
    {
        $this->expectException(Exceptions\UserDeprecatedException::class);
        $this->handlers->whichError('User Depricated Error', 16384, 'error.php', 15);
    }

    /**
     * test throw UserErrorException.
     */
    public function testWhichErrorMethodIsThrowingUserErrorException()
    {
        $this->expectException(Exceptions\UserErrorException::class);
        $this->handlers->whichError('User Error', 256, 'error.php', 15);
    }

    /**
     * test throw UserNoticeException.
     */
    public function testWhichErrorMethodIsThrowingUserNoticeException()
    {
        $this->expectException(Exceptions\UserNoticeException::class);
        $this->handlers->whichError('User Notice', 1024, 'error.php', 15);
    }

    /**
     * test throw UserWarningException.
     */
    public function testWhichErrorMethodIsThrowingUserWarningException()
    {
        $this->expectException(Exceptions\UserWarningException::class);
        $this->handlers->whichError('User Warning', 512, 'error.php', 15);
    }

    /**
     * test throw WarningException.
     */
    public function testWhichErrorMethodIsThrowingWarningException()
    {
        $this->expectException(Exceptions\WarningException::class);
        $this->handlers->whichError('Warning', 2, 'error.php', 15);
    }

    /**
     * testSerErrorMethod.
     *
     * @return array error
     */
    public function testSetErrorMethod()
    {
        $errors = $this->handlers->setError(15, 'warning error test ! ', 'errorFile.php', 5, 'className', []);

        $this->assertInternalType('array', $errors);
    }
}
