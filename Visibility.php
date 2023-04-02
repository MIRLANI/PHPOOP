<?php 


require_once "Class/Product.php";

use  Data\Product;

$product = new Product("Jeruk", 2000);
$product->setNama("Apel");
$product->setPrice(30000);
echo "Nama: " . $product->getNama() . PHP_EOL;
echo "Harga: " . $product->getPrice() . PHP_EOL;

// $product->nama = "Apel";
// $product->price = 1000;




?>