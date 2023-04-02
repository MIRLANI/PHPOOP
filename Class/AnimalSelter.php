<?php

namespace Data
 {
    require_once "Animal.php" ;
    
    interface AnimalSelter
    {
        function adoft(string $name): Animal;
    }

    class CatShalter implements AnimalSelter {
       public function adoft(string $name): Cat
       {
          $cat = new Cat();
          $cat->name = $name;
          return $cat;
       }
    }

    class DogShalter implements AnimalSelter{
        public function adoft(string $name): dog
        {
            $dog = new dog();
            $dog->name = $name;
            return $dog;
        }
    }
}
