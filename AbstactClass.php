<?php 

require_once "Class/location.php" ;

use data\Location;
use data\City;

// ERROR CODE
// $location = new Location();

$city = new City();
$city->nama = "Mirlani";
echo "Nama: $city->nama" . PHP_EOL;

?>