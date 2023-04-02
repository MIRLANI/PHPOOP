<?php 



interface HelloWord 
{
    function sayHello(): void;
}

interface Login
{
    function facebook(): void;
}

$helloword = new class implements HelloWord
{
    public function sayHello (): void
    {
        echo "Hello Word" . PHP_EOL;
    }
};

$login = new class("Mirlani") implements Login
{

    public string $nama;

    public function __construct(string $nama)
    {
        $this->nama = $nama;
    }
    public function facebook(): void
    {
        echo "selamat datang di facebook $this->nama" . PHP_EOL;
    }
};

$login->facebook();

$helloword->sayHello();

?>