<?php
    interface Animal
    {
        public function eat();
        public function sleep();
    }

    interface FlyAnimal
    {
        public function fly();
    }

    interface SwimAnimal
    {
        public function swim();
    }

    class EagleBird implements Animal, FlyAnimal
    {
        public function eat() {}
        public function sleep() {}
        public function fly() 
        {
            echo "Chim ưng có thể bay trên bầu trời";
        }
    }

    class catFish implements Animal, SwimAnimal
    {
        public function eat() {}
        public function sleep() {}
        public function swim() 
        {
            echo "Cá trê có thể bơi";
        }
    }

    $eagleBird = new EagleBird();
    $catFish = new CatFish();

    echo $eagleBird->fly();
    echo "<br>********<br>";
    echo $catFish->swim();
?>