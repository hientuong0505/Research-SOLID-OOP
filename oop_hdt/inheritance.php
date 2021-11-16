<?php
    class Human
    {
        public $name;
        public $age;
        public $weight; //Can nang Kilogram
        public $height; //Chieu cao centimet

        function __construct($name, $age, $weight, $height)
        {
            $this->name = $name;
            $this->age = $age;
            $this->weight = $weight;
            $this->height = $height;
        }
    }

    class Tuong extends Human
    {
        public function chayBo()
        {
            echo "Tuong co the chay bo";
        }
        public function boiLoi()
        {
            echo "Tuong co the boi loi";
        }
    }

    $tuong = new Tuong("DHTUONG", 21, 65, 170);
    echo $tuong->chayBo();
?>