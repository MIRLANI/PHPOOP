<?php 


class Manager 
{
    var string $nama;
    public string $title;

    public function __construct(string $nama="lani", string $title = "Indonesia")
    {
        $this->nama = $nama;
        $this->title = $title;
    }

    public function sayHello (string $nama){
        echo "Hello selamat datang $nama dirumah manager $this->nama" . PHP_EOL;
    }
}

class ViceManager extends Manager
{

    public function __construct(string $nama = "arman")
    {
        parent::__construct($nama, "indonesia");
    }
    // function ovaraiding atau menuliskan ulang function yang ada perent class ke child class
    public function sayHello (string $nama)
    {
        echo "Hello selamat datang $nama dirumah vp $this->nama" . PHP_EOL;
    }
}

?>