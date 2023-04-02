<?php 


$nama = [];
$result = preg_match_all("/Mirlani|la|i|u|/i", "Muhammad Mirlani", $nama);
var_dump($result);
var_dump($nama);

$hi = preg_replace("/anjing| kuda| bajingan/i", "***", "kamau itu kaya ANJING BAJINGAN dan seperti kuda");
var_dump($hi);

$hu = preg_split("/[\s,-]/", "Muhammad Mirlani, Arman, mirna-hello fendijaya, hello word");
var_dump($hu);


?>