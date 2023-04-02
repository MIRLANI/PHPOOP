<?php 

require_once "Class/Person.php" ;

$person = new Person("Mirlani", "Sombu");
echo "Nama: ".$person->name . PHP_EOL;
echo "Address: ".$person->address . PHP_EOL;


?>