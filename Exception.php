<?php 

require_once "Data/Validation.php" ;
require_once "Data/LoginReques.php";
require_once "Data/Validation.php" ;

$exption = new LoginReques();
$exption->username = " ";
$exption->password = " ";

try{
    ValidationLoginExepsion($exption);
    echo "Valid" . PHP_EOL;
}catch(ValidationExepsion | Exception $lani){
    echo " error : ". $lani->getMessage() . PHP_EOL;
    var_dump($lani->getTrace());
    echo $lani->getTraceAsString() . PHP_EOL;
}finally{
    echo "ERROR ATAU TIDAK AKAN DIEKSEKUSI" . PHP_EOL;
}
// catch(Exception $lani){
//     echo "error : ". $lani->getMessage() . PHP_EOL;
// }


?>