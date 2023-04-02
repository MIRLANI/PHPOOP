<?php 

require_once "Class/Conflic.php";

use Data\one\Conflict as oneConflict;
use Data\two\Conflict as twoConflict;
use function Data\sayHey as oneData;
use const Data\NAMA as twoData;

$coflict = new oneConflict();
$conflic1 = new twoConflict();

oneData();
echo "Nama: " . twoData . PHP_EOL;


?>