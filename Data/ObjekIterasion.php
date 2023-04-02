<?php 




// MENGGUNAKAN OBJEK ITERASI
class Data
{
    public string $nama = "mirlani";
    public string $nim = "f1g120027";
    public string $kelas = "ganjil";
}


$data = new Data();

foreach ($data as $key=> $value){
    echo "$key. $value " . PHP_EOL;
}


?>