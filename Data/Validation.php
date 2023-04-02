<?php 

require_once "Exepsion/ValidationExepsion.php" ;

function ValidationLoginExepsion (LoginReques $reques)
{
   if (!isset($reques->username)) {
       throw new ValidationExepsion("Username is null");
   }else if (!isset($reques->password)){
        throw new ValidationExepsion("Password is null"); // buat sendiri
   }else if ($reques->username == " ") {
       throw new Exception("Username is empty"); // dari bawahan php
   }else if ($reques->password == " "){
       throw new Exception("Pasword is empty"); // bawhan php
   }
}



?>