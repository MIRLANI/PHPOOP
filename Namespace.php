<?php


namespace {

    require_once "Class/Conflic.php";

    $conflic1 = new Data\one\Conflict();
    $conflic2 = new Data\two\Conflict();

    // mengases function dan constan di namespace
    echo "Nama: " . Data\NAMA . PHP_EOL;
    data\sayHey();
}
