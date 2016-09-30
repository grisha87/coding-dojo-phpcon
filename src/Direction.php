<?php

namespace PhpCon;

class Direction
{
    const NORTH = 1;
    const EAST = 2;
    const WEST = 3;
    const SOUTH = 4;

    /** @var  int */
    private $dir;

    public function __construct(int $dir)
    {
        $this->dir = $dir;
    }

    public function getOppositeDirection()
    {
        return 5 - $this->dir;
    }
}