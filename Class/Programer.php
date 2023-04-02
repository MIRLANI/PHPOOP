<?php


namespace Data {
    class Programer
    {
        public string $name;
        public function __construct(string $name)
        {
            $this->name = $name;
        }
    }

    class BackendProgramer extends Programer
    {
    }
    class FromendProgramer extends Programer
    {
    }

    class Company
    {
        public Programer $progremer;
    }

    // funciton yang menggunakan polymorphisme
    function sayHello(Programer $lani)
    {
        echo "Hello selamat datang $lani->name " . PHP_EOL;
    }

    // melakukan pengecekan menggunakan instanceof
    function cek(Programer $lani)
    {
        if ($lani instanceof BackendProgramer) {
            echo "Hello selamat datang BandendProgremer $lani->name" . PHP_EOL;
        } else if ($lani instanceof FromendProgramer) {
            echo "Hello selamat datang di FromendProgramer $lani->name" . PHP_EOL;
        } else if ($lani instanceof Programer) {
            echo "Hello selamat datang di Programer $lani->name" . PHP_EOL;
        }
    }
}
