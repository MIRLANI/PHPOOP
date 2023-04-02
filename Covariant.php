<?php

use Data\Cat;
use Data\CatShalter;
use Data\DogShalter;

require_once "Class/Animal.php";
require_once "Class/Food.php" ;
require_once "Class/AnimalSelter.php";

// memanggil class covarian catshalter 
$catshalter = new CatShalter();
$cat = $catshalter->adoft("Luna");
$cat->eat(new AnimalFood() );

// memanggil class covarian dogshalter
$dogshalter = new DogShalter();
$dog = $dogshalter->adoft("anjing");
$dog->eat(new Food ())


?>