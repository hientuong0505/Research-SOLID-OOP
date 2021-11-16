<?php
    interface Shape
    {
        public function get_area();

    }

    class Rectangle implements Shape
    {
        public $width, $height;

        function __construct($width, $height)
        {
            $this->width = $width;
            $this->height = $height;
        }
        public function get_area()
        {
            return $this->width * $this->height;
        }
    }

    $r1 = new Rectangle(5,6);
    echo $r1->get_area();

?>