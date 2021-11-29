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

        function __construct($name, $age, $city)
        {
            $this->name = $name;
            $this->age = $age;
            $this->city = $city;
        }

        public function workInOffice()
        {
            echo "Nhân viên của công ty sẽ làm việc tại văn phòng";
        }
    }

    class OfficialEmployee extends Employee implements Insurance
    {
        public function haveInsurance()
        {
            echo "Nhân viên {$this->name} sẽ nhận được trợ cấp";
        }
    }

    class InternEmployee extends Employee
    {
        public function haveTraining()
        {
            echo "Nhân viên {$this->name} sẽ được đào tạo vì đang thực tập";
        }
    }

    $officialEmployee = new OfficialEmployee("Nguyễn Văn A", 30, "Đà Nẵng");
    $internEmployee = new InternEmployee("Trần Văn B", 21, "Đà Nẵng");

    echo $officialEmployee->haveInsurance();
    echo "<br>";
    echo $officialEmployee->workInOffice();
    echo "<br>********<br>";
    echo $internEmployee->haveTraining();
?>