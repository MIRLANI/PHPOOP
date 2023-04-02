<?php 



class Data implements IteratorAggregate
{
  
    public string $nama = "mirlani";
    public string $nim = "f1g120027";
    public string $kelas = "ganjil";

    public function getIterator(): Traversable
    {
        // return new ArrayIterator([
        //      "nama: ". $this->nama,
        //      //"Nim: ". $this->nim,
        //      "Kelas: ". $this->kelas,
             
        // ]);
        yield "nama: ". $this->nama;
        yield "Nim: ". $this->nim;
        yield "Kelas: ". $this->kelas;
    }
}


$data = new Data();
foreach ($data as $key=> $value){
    echo "$key. $value" . PHP_EOL;
}


?>