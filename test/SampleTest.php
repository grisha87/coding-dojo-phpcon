<?php

class SampleTest extends \PHPUnit\Framework\TestCase
{
    public function testSample()
    {
        $sut = new \PhpCon\Sample();

        $this->assertEquals(1, $sut->foo());
    }
}