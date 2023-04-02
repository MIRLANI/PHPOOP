<?php 


/*

CATATAN:
1. interface dan interface menggunakan extends
2. class dan interface menggunakan implements
3. bisa lebih dari satu interface yang digunakan diclass atau di interface

*/

namespace Data
{
    interface Mahasiswa 
    {
        function getMahasiswa();
    }

    interface Dosen 
    {
        function getDosen();
    }

    interface Car extends Mahasiswa
    {
      function drive() :void;
      function getTire() :int;
    }

    class Avanza implements Car, Dosen 
    {
        public function drive(): void
        {
            echo "Driver is available" . PHP_EOL;
        }

        public function getTire(): int
        {
            return 5;
        }
        public function getMahasiswa()
        {
            echo "selamat datang mahasiswa" . PHP_EOL;
        }

        public function getDosen()
        {
            echo "selamat datang dosen". PHP_EOL;
        }
    }
}


?>