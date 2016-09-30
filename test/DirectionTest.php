<?php

namespace PhpCon;

class DirectionTest extends \PHPUnit_Framework_TestCase
{
    public function testGetOppositeDirection()
    {
        $dir = new Direction(Direction::SOUTH);
        $this->assertEquals(Direction::NORTH, $dir->getOppositeDirection());
    }
}