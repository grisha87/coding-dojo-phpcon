<?php

namespace PhpCon;

class CommandTest extends \PHPUnit\Framework\TestCase
{
    public function testParseCommand()
    {
        $command = 'go north';
        $parser = new Parser();
        $parser->parse($command);


    }
}