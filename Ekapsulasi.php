<?php 

require_once "Class/Catagori.php";

// mengubah nama
$catagori = new Katagori();
$catagori->setNama("lani");
$catagori->setExpersif(true);

$catagori->setNama(" ");


echo "Nama: " . $catagori->getNama() . PHP_EOL;
echo "Expresife: " . $catagori->isExpersif() . PHP_EOL;



?>