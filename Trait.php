<?php 

require_once "Class/Sayhello.php";

use Data\Traits\one;
use Data\Traits\one\Persons;

$person = new Persons();
$person->sayHello("Mirlani");
$person->sayHello(null);
$person->name = "Arman";
$person->sayMas("Mirna");
$person->canRun();


?>