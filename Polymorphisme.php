<?php

use Data\BackendProgramer;
use Data\Company;
use Data\FromendProgramer;
use Data\Programer;

use function Data\cek;
use function Data\sayHello;

require_once "Class/Programer.php";

$conpany = new Company();
var_dump($conpany);

$conpany->progremer = new Programer("Mirlani");
var_dump($conpany);

$conpany->progremer = new BackendProgramer("Armani");
var_dump($conpany);

$conpany->progremer = new FromendProgramer("Fendi");
var_dump($conpany);


// memanggil function polymorphisme
sayHello(new Programer("Mirlani"));
sayHello(new BackendProgramer("Arman"));
sayHello(new FromendProgramer("mirna"));

// memanggil function untuk pengecekan
cek(new Programer("Mirlani"));
cek(new BackendProgramer("Arman"));
cek(new FromendProgramer("mirna"));
?>