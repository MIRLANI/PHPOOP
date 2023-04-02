<?php 



require_once "Class/MatHelper.php";

MatHelper::sayHello("lani");
echo MatHelper::$nama . PHP_EOL;

$total = MatHelper::sum(44,33,22,55,4);
echo "Total = $total" . PHP_EOL;



?>