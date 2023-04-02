<?php 

// menggunakan function ovaraiding
require_once "Class/Manager.php";

$manager = new Manager();
$manager->nama = "Arman";
$manager->sayHello("Mirlani");

$vp = new ViceManager();
$vp->nama = "Mirlani";
$vp->sayHello("Arman");

?>