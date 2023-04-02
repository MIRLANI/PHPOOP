<?php 

$a = 101;
$b = 0;

try{
    if ($b == 0){
        throw new Exception("Tidak dapat melakukan pembagian dengan nol");
     }
     
     $result = $a / $b;
     echo $result . PHP_EOL; 
     
}catch (Exception $e){
    echo "Terjadi kesalahan " . $e->getMessage() . PHP_EOL;
}

?>