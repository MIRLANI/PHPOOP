<?php 

require_once "Class/Manager.php" ;

$manager = new Manager();
$manager->nama = "Mirlani";
$manager->sayHello("Arman");

$vc = new ViceManager();
$vc->nama = "Mali";
$vc->sayHello("Mirna");


?>