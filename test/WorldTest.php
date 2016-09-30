<?php

namespace PhpCon;

class WorldTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateWorld()
    {
        $world = new World();
    }

    public function testBuildMap()
    {
        $world = new World();

        $home = new Location("Home", "Some");
        $dest = new Location("Dest", "Some");

        $home->setLocationTo(Direction::NORTH, $dest);

        $world->addLocation($home);
        $this->assertEquals('Home',$world->getLocation('Home')->getName());
    }
}