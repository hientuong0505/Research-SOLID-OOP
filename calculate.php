<?php

    interface AreaInterface
    {
        public function calculate();
    }

    class AreaCalculate
    {
        public function calculate(AreaInterface $areaInterface)
        {
            return $areaInterface->calculate();
        }
    }

    //Dien tich hinh vuong
    class Square implements AreaInterface
    {
        public $width;
        public $height;

        function __construct($width, $height)
        {
            $this->width = $width;
            $this->height = $height;
        }

        public function calculate()
        {
            return $this->width * $this->height;
        }
        
    }

    //Dien tich hinh tron
    class Circle implements AreaInterface
    {
        public $radius;

        function __construct($radius)
        {
            $this->radius = $radius;
        }

        public function calculate()
        {
            return $this->radius * $this->radius * pi();
        }

        function __destruct()
        {
            echo "\nHello word";
        }
    }

    $square = new Square(5,6);
    $circle = new Circle(5);

    echo $square->calculate();
    echo "\n";
    echo $circle->calculate();
?>