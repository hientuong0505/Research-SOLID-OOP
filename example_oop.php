<?php
    // Không thể khởi tạo đối tượng trong abstract class ($abc = new Animal())
    abstract class Animal
    {
        public $name;
        public $foot;

        abstract public function run();

        public function __construct($name, $foot)
        {
            $this->name = $name;
            $this->foot = $foot;
        }

        public function another()
        {
            echo "Hello every one";
        }

    }

    interface EatingFoot
    {
        const FIGHTING = "Đấm nhau không?"; // Trong interface có thể khai báo hằng nhưng biến thì không
        public function eat(); // Chỉ có thể dùng public 
    }

    //Khi kế thừa interface or Abs (abstract function) thì phải khai báo các pthuc của nó trong sub-class
    class ChoGiuNha extends Animal implements EatingFoot
    {
        public function run()
        {
            echo "Chó giữ nhà có thể chạy";
        }

        public function eat()
        {
            echo "Loài chó này có thể ăn được";
        }

        public function another()
        {
            Parent::another(); //Tính đa hình gọi lại pthuc another của Animal và có thể thực thi những pt khác nhau
            echo " và sau đây là chó giữ nhà";
        }
    }

    //Chó máy không thể ăn được nên ta sẽ tách pthuc ăn ra 1 interface riêng
    class ChoMayMoc
    {
        public function run()
        {
            echo "Chó máy móc chạy nhanh hơn chó giữ nhà";
        }
    }

    $choGiuNha = new ChoGiuNha("Poc", 4);
    echo $choGiuNha->another();
    echo "<br>";
    echo $choGiuNha->run();
    echo "<br>";
    echo $choGiuNha->eat();
?>