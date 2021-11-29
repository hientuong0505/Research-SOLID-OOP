<?php
    class Animal1
    {
        public function eat()
        {
            echo "Animal can eating";
        }
    }

    class Lion extends Animal1
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