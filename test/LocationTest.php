<?php

namespace PhpCon;

class LocationTest extends \PHPUnit\Framework\TestCase
{
    public function testConstruct()
    {
        $name = 'Dom';
        $desc = 'Tutaj mieszkasz';

        $pl = new Location($name, $desc);

        $this->assertEquals($desc, $pl->getDescription());
    }

    public function testTwoLocations()
    {
        $loc1 = new Location('Home', 'Yes');
        $loc2 = new Location('Post', 'No');

        $loc1->setLocationTo(Direction::NORTH, $loc2);
        $this->assertEquals($loc1->getLocationOn(Direction::NORTH), $loc2);
    }

    public function testLocationName()
    {
        $loc1 = new Location('Home', 'Yes');
        $this->assertEquals('Home',$loc1->getName());
    }

    public function testSetLocationOnSouth()
    {
        $home = new Location('X', 'Y');
        $dest = new Location('A', 'B');

        $home->setLocationTo(Direction::SOUTH, $dest);
        $this->assertEquals($dest, $home->getLocationOn(Direction::SOUTH));
    }

    /**
     * @expectedException \PhpCon\IncorrectDirectionException
     */
    public function testGoToIncorrectLocation()
    {
        $home = new Location('X', 'Y');
        $dest = new Location('A', 'B');

        $home->setLocationTo(Direction::SOUTH, $dest);
        $home->getLocationOn(Direction::EAST);
    }

    /**
     * @expectedException \PhpCon\DoulbeDirectionException
     */
    public function testDoulbeDirection()
    {
        $home = new Location('Home', '');
        $dest1 = new Location('Dest1', '');
        $dest2 = new Location('Dest2', '');

        $home->setLocationTo(Direction::SOUTH, $dest1);
        $home->setLocationTo(Direction::SOUTH, $dest2);
    }

    /**
     * @expectedException \PhpCon\MyselfException
     */
    public function testSetDirectionToMyself()
    {
        $home = new Location('Home', '');

        $home->setLocationTo(Direction::SOUTH, $home);
    }
}