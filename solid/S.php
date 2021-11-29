<?php
    // class GiangVien
    // {
    //     public function nhapDiem() {}
    //     public function giangVienToan() {}
    //     public function giangVienLy() {}
    // }

    /* 
        Nếu tập hợp tất cả giảng viên vào class GiangVien thì sẽ khó khăn khi mở rộng thêm các chức năng
        Trong khi đó function dayToan() của GV toán sẽ không có trong GV lý
    */
    class GiangVien
    {
        public function nhapDiem()
        {
            echo "Là giảng viên bạn có thể nhập điểm cho sinh viên";
        }
    }

    class GiangVienToan extends GiangVien
    {

        public function nhapDiem()
        {
            Parent::nhapDiem();
        }

        public function dayToan()
        {
            echo "Các bài toán về hàm số";
        }
       
    }

    class GiangVienLy extends GiangVien
    {
        public function nhapDiem()
        {
            Parent::nhapDiem();
        }

        public function dayVatLy()
        {
            echo "Chuyển động điều hòa";
        }
        
    }

    $toan = new GiangVienToan;
    $vatLy = new GiangVienLy;

    echo $toan->dayToan();
    echo "<br>";
    echo $toan->nhapDiem();
    echo "<br>********<br>";

    echo $vatLy->dayVatLy();
    echo "<br>";
    echo $vatLy->nhapDiem();
?>