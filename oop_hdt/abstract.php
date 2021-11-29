<?php
    abstract class Car //Vi du ve Abstract Class
    {
        public $name; //Ten
        public $numWheel; //So banh xe

        // function __construct($name, $numWheel)
        // {
        //     $this->name = $name;
        //     $this->numWheel = $numWheel;
        // }

        // function __destruct()
        // {
        //     echo "Xe hơi siu xịn";
        // }

        // abstract public function duaXe();

        public function abc()
        {
            echo "abc";
        }
    }

    abstract class CarF1 extends Car
    {
        abstract public function duaXeMoto();
        public function coHayKhong()
        {
            echo "hello  ";
        }
    }

    class Mercedes extends Car
    {
        public function gioiThieu() : string {
            return "Loại hãng xe đến từ Đức";
        }


        public function duaXe()
        {
            echo "xyz  ";
        }

        public function duaXeMoto()
        {
            echo "abc  ";
        }
    }

    // $mer = new Mercedes("Mercedes g63",4);
    // echo $mer->duaXeMoto();
    // echo $mer->coHayKhong();

    $abc = new Mercedes();
    echo $abc->abc();
    
?>