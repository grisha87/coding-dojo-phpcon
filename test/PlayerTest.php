<?php

namespace PhpCon;

class PlayerTest extends \PHPUnit\Framework\TestCase
{
    public function testConstruct()
    {
        $name = "Grzegorz";

        $loc = new Location('Home location', 'Some desc');
        $pl  = new Player($name, $loc);

        $this->assertEquals($name, $pl->getName());
        $this->assertEquals($loc, $pl->getLocation());
    }

    public function testPlayerCanMoveNorth()
    {
        $l1 = new Location("S", "X");
        $l2 = new Location("Z", "Y");

        $l1->setLocationTo(Direction::NORTH, $l2);

        $p = new Player("Me", $l1);

        $newLocation = $p->move(Direction::NORTH);

        $this->assertSame($l2, $newLocation);
    }

}