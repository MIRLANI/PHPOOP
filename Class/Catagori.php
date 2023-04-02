<?php 


class Katagori 
{
    private string $nama;
    private bool $expersif;

    // untuk mengabil nama 
    public function getNama() : string
    {
        return $this->nama;
    }

    // mengubah nama
    public function setNama(string $nama):void
    {
        if (trim($nama) != ""){
            $this->nama = $nama;
        }
    }

    // mengambil
    public function isExpersif() : bool
    {
        return $this->expersif;
    }

    // mengubah
    public function setExpersif(bool $expersif): void
    {
        $this->expersif = $expersif;
    }

}


?>