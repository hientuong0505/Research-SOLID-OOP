<?php
    interface Car
    {
        const VERSION = '123';
        public function loaiXeDua();
        
    }

    interface Car2 extends Car
    {
        public function abcd();
    }

    class CarF1 implements Car2
    {
        public $name; //Ten
        public $numWheel; //So banh xe
        
        function __construct($name, $numWheel)
        {
            $this->name = $name;
            $this->numWheel = $numWheel;
        }

        public function loaiXeDua()
        {
            echo "Xe nay co the dua duoc";
        }

        
    }

    $carF1 = new CarF1("F1 car", 5);
    echo $carF1->loaiXeDua();
?>