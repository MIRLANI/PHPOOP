<?php 


require_once "Class/Shape.php";

use Data\{Shape, Retagle};

$shape = new Shape("Fendi");
$shape->nama = "Mirlani";
echo $shape->sayHello() . PHP_EOL;

// MENGGUNAKAN CLASS YANG KEDUA

$retagle = new Retagle("Fendi", "f1g120027");
echo $retagle->sayHello() . PHP_EOL;
echo $retagle->hey();


?>