<?php 

require_once "Class/Conflic.php";

use Data\one\Conflict;
use function Data\sayHey;
use const Data\NAMA;

$conflict = new Conflict();

sayHey();
echo "Nama: " . NAMA . PHP_EOL;


?>