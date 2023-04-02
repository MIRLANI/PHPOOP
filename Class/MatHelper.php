<?php 


class MatHelper
{
    static public $nama = "Arman";
    static public function sayHello(string $nim): void
    {
        echo "selamat datang $nim" . PHP_EOL;
    }

    static public function sum(int...$jumlah): int
    {
        $total = 0;
        foreach ($jumlah as $jum) {
             $total += $jum;
        }
        return $total;
    }

}



?>