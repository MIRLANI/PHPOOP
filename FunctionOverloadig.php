<?php 


class Zero 
{
    private array $properti = [];
  
    public function __get($name)
    {
        // echo "tidak ada properti ini yaitu  $name" . PHP_EOL;
        // return "Contoh Ya";

        return $this->properti[$name];
    }

    public function __set($name, $value)
    {
        //echo "tidak ada properti $name dan valuenya $value " . PHP_EOL;
        return $this->properti[$name] = $value;
    }

    public function __unset($name)
    {
        // echo "menghapus variabel ini tidak ada $name" . PHP_EOL;
        // return false;

        return $this->properti[$name];
    }

    public function __isset($name)
    {
        // echo "mengecek nama $name variabel ini tidak ada" . PHP_EOL;
        return $this->properti[$name];
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo"call ke function $name yang argumensnya $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "call ke function static $name yang argumensnya $join" . PHP_EOL;
    }
}



$zero = new Zero();

// MENGGUNAKAN VARIABEL SET
// echo $zero->midelnama . PHP_EOL;

// $zero->nama = "Muhammad Mirlani" . PHP_EOL;

// // MENGGUNAKAN UNSET
// unset($zero->midelname);

// // MENGGUNAKAN ISSET
// isset($zero->muhammadMirlani);

$zero->lasnama = "Mirlani";
$zero->firsnama = "Lani pro";
$zero->midelnama = "Muhamma Mirlani";

echo "Las Nama: " . $zero->lasnama . PHP_EOL;
echo "Firs Nama: " . $zero->firsnama . PHP_EOL;
echo "Midel nama: " . $zero->midelnama . PHP_EOL;



// MEMANGGIL FUNCTION CALL dan callStatic
$zero->sayHello ("muhammad Mirlani", 7373, "Mirlani");
Zero::sayHey("Arman", 3839, "Mirna");
?>