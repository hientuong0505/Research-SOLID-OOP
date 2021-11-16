<?php

    interface Running
    {
        public function run();
    }

    class Animal implements Animal
    {
        public $name;
        public $foot;
        public $weight;

        public function run()
        {
            echo "Chạy với tốc độ xyz";    
        }
    }

?>