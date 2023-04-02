<?php 

require_once "Class/Person.php" ;

define("APLIKASI", "Belajar PHP oop");
const APP_VERSION = "2.3.1";

echo APLIKASI . PHP_EOL;
echo APP_VERSION . PHP_EOL;


echo Person::AUTHOR . PHP_EOL;

$person = new Person("lani", "wakatobi");
$person->Info();