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

        public  function __construct($maSanPham,$tenSanPham, KhoHang $khoHang)
        {
            $this->maSanPham = $maSanPham;
            $this->tenSanPham = $tenSanPham;
            $this->khoHang = $khoHang;
        }

        public function getTenSanPham()
        {
            return $this->tenSanPham; //Lấy tên sản phẩm
        }

        public function getMaSanPham()
        {
            return $this->maSanPham; //Lấy mã sản phẩm
        }

        public function getKhoHang()
        {
            return $this->khoHang; //Lấy trạng thái và số lượng trong kho
        }

    }

    $khoHang = new KhoHang("200", "1");
    $aoDaiTay = new SanPham("002","Ao dai tay",$khoHang);


    //var_dump sẽ in ra thông tin của biến gồm kiểu dữ liêu và giá trị
    var_dump($aoDaiTay->getKhoHang());
?>