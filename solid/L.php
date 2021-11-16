<?php
    interface Insurance
    {
        public function haveInsurance();
    }

    class Employee
    {
        public $name;
        public $age;
        public $city;
    }

    class OfficialEmployee extends Employee implements Insurance
    {
        public function haveInsurance()
        {
            echo "Tro cap cua nhan vien";
        }
    }

    class InternEmployee extends Employee
    {
        ////////////
    }
?>