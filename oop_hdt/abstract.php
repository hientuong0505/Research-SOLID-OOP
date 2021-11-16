<?php
    abstract class Car //Vi du ve Abstract Class
    {
        public $name; //Ten
        public $numWheel; //So banh xe

        function __construct($name, $numWheel)
        {
            $this->name = $name;
            $this->numWheel = $numWheel;
        }

        function __destruct()
        {
            echo "Xe hơi siu xịn";
        }
    }

    class Mercedes extends Car
    {
        public function gioiThieu() : string {
            return "Loại hãng xe đến từ Đức";
        }
    }

    $mer = new Mercedes("Mercedes g63",4);
    echo $mer->gioiThieu();
?>