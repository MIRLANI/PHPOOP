<?php 


$nama = [
    "lasnama" => "Mirlani",
    "midenama" => "lani",
    "firsnama" => "Muhammad Mirlani"

];

// MEMBUAT ARRAY MENJADI OBJEK MENGGUNAKAN stdClass
$nama = (object) $nama;
echo $nama->lasnama . PHP_EOL;
echo $nama->midenama . PHP_EOL;
echo $nama->firsnama . PHP_EOL;

$mahasiswa = new class ("mirlani", "f1g120027", "ganjil")
{
    public string $nama;
   public string $nim;
   public string $kelas;

   public function __construct(string $nama, string $nim, string $kelas)
   {
     $this->nama = $nama;
     $this->nim = $nim;
     $this->kelas = $kelas;
   }
};

// MEMBUAT OBJEK MENJADI ARRAY MENGGUNAKNA stdClass
$mahasiswa = (array) $mahasiswa;
echo"Nama: ". $mahasiswa['nama'] . PHP_EOL;
echo"Nim: ". $mahasiswa['nim'] . PHP_EOL;
echo"Kelas: ". $mahasiswa['kelas'] . PHP_EOL;

