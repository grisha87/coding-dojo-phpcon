<?php

namespace PhpCon;

class World
{
    /** @var Location[][] */
    protected $map;

    public function __construct()
    {

    }

    public function addLocation(Location $loc)
    {
        $this->map[$loc->getName()] = $loc;
    }

    public function getLocation(string $name)
    {
        return  $this->map[$name];
    }
}