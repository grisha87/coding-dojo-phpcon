<?php

namespace PhpCon;

class Location
{
    /** @var string  */
    protected $name;
    protected $description;
    public $locationByOthersLocations = [];

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setLocationTo(string $dir, Location $loc)
    {
        if (isset($this->locationByOthersLocations[$dir])) {
            throw new DoulbeDirectionException('DoulbeDirectionException');
        }
        if ($this->name == $loc->getName()) {
            throw new MyselfException('Myself');
        }
        $this->locationByOthersLocations[$dir] = $loc;

    }

    /**
     * @param string $dir
     *
     * @return Location
     */
    public function getLocationOn(string $dir)
    {
        if (array_key_exists($dir, $this->locationByOthersLocations)) {
            return $this->locationByOthersLocations[$dir];
        }

        throw new IncorrectDirectionException();
    }

    public function getDescription() : string
    {
        return $this->description;
    }
}