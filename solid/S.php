<?php
    // class GiangVien
    // {
    //     public function nhapDiem() {}
    //     public function giangVienToan() {}
    //     public function giangVienLy() {}
    // }



    class GiangVien
    {
        public function nhapDiem() {}
    }

    class giangVienToan
    {
        public function dayToan() {}
        public function giangVienToan(GiangVien $gv) {}
    }

    class giangVienLy
    {
        public function dayVatLy() {}
        public function giangVienLy(GiangVien $gv) {}
    }
?>