<?php
    class Car
    {
        public static function model()
        {
            self::getModel();
        }

        protected static function getModel()
        {
            echo "I am a super Car";
        }
    }

    class Car1
    {
        public static function model()
        {
            static::getModel();
        }

        protected static function getModel()
        {
            echo "I am a super Car 111";
        }
    }

    class BMW extends Car
    {
        protected static function getModel()
        {
            echo "I am BMW"; //Khi gọi đến Self nó không trả về BMW mà trả về Car
        }
    }

    class Mercedes extends Car1
    {
        protected static function getModel()
        {
            echo "I am Mercedes";
        }
    }
    echo "Ví dụ cho Self: <br>";
    echo BMW::model();
    echo "<br>*********<br>";
    echo "Ví dụ cho Static: <br>";
    echo Mercedes::model();
?>