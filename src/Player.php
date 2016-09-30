<?php

namespace PhpCon;

class Player
{
    /** @var string  */
    protected $name;

    /** @var Location  */
    private $location;

    public function __construct(string $name, Location $location)
    {
        $this->name = $name;
        $this->location = $location;
    }

    /**
     * @param string $dir
     *
     * @return Location New location
     */
    public function move(string $dir) : Location
    {
        $new = $this->location->getLocationOn($dir);

        if ($new) {
            $this->location = $new;
        }

        return $this->location;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }
}