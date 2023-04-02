<?php 

class Person  
{
    const AUTHOR = "Muhammad Mirlani";

    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";


    public function __construct(string $nama, ?string $address)
    {
        $this->name = $nama;
        $this->address = $address;
    }

    public function Info ()
    {
        echo "Nama : " . self::AUTHOR;
    }

    public function __destruct()
    {
        echo "Selamat Tinggal $this->name Sampai Berjumpa Lagi" . PHP_EOL;
    }

}


?>