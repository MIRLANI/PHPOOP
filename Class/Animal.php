<?php


namespace Data 
{

    require_once "Food.php" ;

    use AnimalFood;
    use Food;

    abstract class Animal
    {
        public string $name;
        public abstract function run();
        public abstract function eat(AnimalFood $food);
    }

    // membut class turunannya 
    class Cat extends Animal
    {
        public function run()
        {
            echo "selamat datang $this->name" . PHP_EOL;
        }

        public function eat(AnimalFood $food): void
        {
            echo "selamat datang animal food" . PHP_EOL;
        }
    }
    class dog extends Animal
    {
        public function run()
        {
            echo "selamat datang $this->name" . PHP_EOL;
        }

        public function eat(Food $food): void
        {
            echo "makanan anjing " . PHP_EOL;
        }
    }
}
