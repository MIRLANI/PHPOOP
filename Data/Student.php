<?php 



class Student 
{
    public string $nama = "Mirlani";
    public string $id = "golang";
    public string $value = "2322";

    public function __clone()
    {
        //unset ($this->value);
    }

    public function __toString()
    {
        return "nama saya $this->nama id: $this->id dan nilai yang saya miliki $this->value";
    }

    public function __invoke(...$argumens)
    {
        $join = join(",", $argumens);
        echo "Selamat datang di sini $join" . PHP_EOL;
    }

    public function __debugInfo()
    {
        return [
            "nama" => $this->nama,
            "Id" => $this->id,
            "Value" =>$this->value,
            "jenis Kelamin" => "laki-laki"

        ];
    }
}


$student = new Student();
echo "Nama: " . $student->nama. PHP_EOL;
echo "Id: " . $student->id . PHP_EOL;
echo "Nama: " .$student->value. PHP_EOL;

// MENCLONING SEBUAH OBJEK
$student1 = clone $student;
var_dump($student1);


// CONPARING OBJEK
var_dump($student == $student1);
var_dump($student1 === $student1);

// MENGUBAH OBJEK MENJADI STRING MENGGUNAKAN toString()
$string = new Student();
echo $string . PHP_EOL;


// MENGUBAH OBJEK MENJADI FUNCTION
$student = new Student();
$student("muhammad mirlani" , "arman");

// MENGEDIT PROPERTI VALUE YANG DIHASILKAN DARI var_dum()
$student3 = new Student();
var_dump($student3);
?>