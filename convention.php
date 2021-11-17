<?php
    // Lớp không quá 500 dòng
    class ConNguoi
    {
        public $name; //1 dòng chỉ chứa 1 biến
        public $dayOfBirth;
        public $id;

        // Hàm không quá 5 tham số
        function __construct($name, $dayOfBirth, $id)
        {
            $this->name = $name;
            $this->dayOfBirth = $dayOfBirth;
            $this->id = $id;
        }

        public function xinChao()
        {
            // Một dòng không dài quá 80 ký tự
            echo "Xin chao moi nguoi minh ten la {$this->name}, ngay sinh minh la {$this->dayOfBirth}";
        }
    }

    // namespace ConNguoi;

    // class ConNguoi
    // {
    //     private $name = 'Con Người';

    //     public function getName()
    //     {
    //         return $this->name;
    //     }
    // }

?>