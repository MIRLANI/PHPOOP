<?php 

require_once "Class/Car.php" ;

use Data\Avanza;

$car = new Avanza();
$car->drive();
echo $car->getTire() . PHP_EOL; 
$car->getMahasiswa();
$car->getDosen();

?>