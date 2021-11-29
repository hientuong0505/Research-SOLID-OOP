<?php
    class KhoHang
    {
        private $soLuong;
        private $trangThai; //0 là hết hàng, 1 là còn hàng

        public  function __construct($soLuong, $trangThai)
        {
            $this->soLuong = $soLuong;
            $this->trangThai = $trangThai;
        }

        public function getSoLuong()
        {
            return $this->soLuong;  
        }

        public function getTrangThai()
        {
            return $this->trangThai;
        }
    }

    class SanPham
    {
        private $tenSanPham;
        private $maSanPham;
        private $khoHang;

        public  function __construct($maSanPham,$tenSanPham)
        {
            $this->maSanPham = $maSanPham;
            $this->tenSanPham = $tenSanPham;
        }

        // public function __construct($maSanPham,$tenSanPham, $soLuong, $trangThai)
        // {
        //     $this->maSanPham = $maSanPham;
        //     $this->tenSanPham = $tenSanPham;
        //     $this->khoHang = new KhoHang($soLuong,$trangThai);
        // }

        public function getTenSanPham()
        {
            return $this->tenSanPham; //Lấy tên sản phẩm
        }

        public function getMaSanPham()
        {
            return $this->maSanPham; //Lấy mã sản phẩm
        }

        public function setKhoHang(KhoHang $khoHang)
        {
            $this->khoHang = $khoHang; /*set cho trang thai và số lượng trong kho hàng */
        }

        public function getKhoHang()
        {
            return $this->khoHang; //Lấy trạng thái và số lượng trong kho
        }

    }

    $aoSoMi = new SanPham("001","Ao so mi cong so");
    $khoHang = new KhoHang("100", "1");

    $aoSoMi->setKhoHang($khoHang);

    //var_dump sẽ in ra thông tin của biến gồm kiểu dữ liêu và giá trị
    var_dump($aoSoMi->getKhoHang());
?>