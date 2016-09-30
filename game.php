<?php

use PhpCon\Direction;
use PhpCon\Player;

require_once __DIR__ . '/vendor/autoload.php';

// Create world
$world = new \PhpCon\World();

$home = new \PhpCon\Location("Home", "You're at your home");
$path = new \PhpCon\Location("A dusty path", "It's so dirty!");
$dest = new \PhpCon\Location("The goal!", "Yay");

$home->setLocationTo(Direction::SOUTH, $path);
$path->setLocationTo(Direction::SOUTH, $dest);

$player = new Player("Link", $home);

while (true) {

    echo $player->getName() . " you're in " . $player->getLocation()->getName() . "\n";
    echo $player->getLocation()->getDescription() . "\n";

    $line = strtolower(readline("What do you do? > "));
    $lineArray = explode(' ',$line);
    $command = $lineArray[0];
    unset($lineArray[0]);
    $params = array_values($lineArray);

    if ($command === "quit") {
        break;
    }

    if ($command === "go") {

    }
}

echo "Bye!\n";