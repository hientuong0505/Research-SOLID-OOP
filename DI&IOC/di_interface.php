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

    interface KhoHangInterface
    {
        public function getKhoHang();
        public function setKhoHang(KhoHang $khoHang);
    }

    class SanPham implements KhoHangInterface
    {
        private $tenSanPham;
        private $maSanPham;
        private $khoHang;

        public  function __construct($maSanPham,$tenSanPham)
        {
            $this->maSanPham = $maSanPham;
            $this->tenSanPham = $tenSanPham;
        }

        public function setKhoHang(KhoHang $khoHang)
        {
            $this->khoHang = $khoHang;
        }

        public function getKhoHang()
        {
            return $this->khoHang;
        }
    }

    $quanDui = new SanPham("003","Quan jean kaki");
    $khoHang = new KhoHang("111","1");
    $quanDui->setKhoHang($khoHang);

    var_dump($quanDui->getKhoHang());
?>