<?php 

require_once "Class/Conflic.php";

use Data\one\{Conflict as conflict1, Conflict2 as Conflictwo};
use function Data\{sayHey as sayHello};
use const Data\{NAMA  as name};

$conflic1 = new conflict1();
$Conflic2 = new Conflictwo();

sayHello();
echo "Nama: " . name . PHP_EOL;



?>