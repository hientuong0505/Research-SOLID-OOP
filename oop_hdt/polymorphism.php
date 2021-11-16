<?php
    class Animal
    {
        public function eat()
        {
            echo "Animal can eating";
        }
    }

    class Lion extends Animal
    {
        public function eat()
        {
            Parent::eat();
            echo "\n and lion eating meat animal";
        }
    }

    $lion = new Lion();
    echo $lion->eat();
?>