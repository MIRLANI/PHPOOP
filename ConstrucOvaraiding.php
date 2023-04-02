<?php 

require_once "Class/Manager.php";

$manager = new Manager("Mirna", "Sombu");
$manager->sayHello("Mirlani");

$vc = new ViceManager();
$vc->sayHello("Fendi");


?>