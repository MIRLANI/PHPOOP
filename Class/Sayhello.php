<?php 

namespace Data\Traits\one;

trait SayHello
{
    public string $nama;

    public function sayHello(?string $nama)
    {
        if (is_null($nama)){
            echo "selamat datang hello $nama" . PHP_EOL;
        }else{
            echo "Sampai jumpa hello $nama" . PHP_EOL;
        }
    }
}

trait SayMas
{
    public string $nama;

    public function sayMas(?string $nama)
    {
        if (is_null($nama)){
            echo "selamat datang mas $nama di rumah $this->name" . PHP_EOL;
        }else{
            echo "Sampai jumpas mas $nama di rumah $this->name" . PHP_EOL;
        }
    }
}

trait HasName 
{
    public string $name;
}

trait CanRun 
{
    public abstract function canRun(): void;
}

class ParenPerson 
{
    use SayMas, SayHello, HasName;
   
    public function sayHello(?string $nama)
    {
        if (is_null($nama)){
            echo "selamat datang hello lani di person" . PHP_EOL;
        }else{
            echo "Sampai jumpa hello $nama di person" . PHP_EOL;
        }
    }
    public function sayMas(?string $nama)
    {
        if (is_null($nama)){
            echo "selamat datang mas $nama di rumah $this->name di person" . PHP_EOL;
        }else{
            echo "Sampai jumpas mas $nama di rumah $this->name di person" . PHP_EOL;
        }
    }
}

trait All 
{
    use SayMas, SayHello, HasName, CanRun{
        // bisa di ovaraiding akse modiviernya
        // sayHello as private;
        // sayMas as private;
        // CanRun as private;
    }
}

class Persons extends ParenPerson{
   use All;

    public function canRun(): void
    {
       echo "Person can run $this->name" . PHP_EOL;
    }

 

}




?>