<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    public function  testFirstMethod()
    {
        $var = 10;

        $this->assertEquals(10, $var);
    }
}