<?php 

namespace Data
{
    class Shape 
    {
        public string $nama;

        public function __construct(string $nama)
        {
                $this->nama = $nama;
        }
        public function sayHello()
        {
            return "Nama: " . $this->nama;
        }
    }
    
    class Retagle extends Shape
    {
        public string $nim;

        public function __construct(string $nama, string $nim)
        {
            parent::__construct($nama);
            $this->nim = $nim;
        }
        public function sayHello()
        {
            return "Nim: " . $this->nim; 
        }

        public function hey () 
        {
            echo parent::sayHello();
            
        }
    }
}

?>