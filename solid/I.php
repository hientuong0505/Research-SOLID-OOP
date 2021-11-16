<?php
    interface DiSanBat
    {
        public function sanBat();
    }

    interface SuaGauGau
    {
        public function gauGau();
    }

    class ChoSanBat implements DiSanBat, SuaGauGau
    {
        public function sanBat()
        {
            echo "Loai cho nay co the di san";
        }

        public function gauGau()
        {
            echo "Loai cho nay co the sua gau gau";
        }
    }

    class ChoGiuNha implements SuaGauGau
    {
        public function gauGau()
        {
            echo "Loai cho nay co the sua gau gau";
        }
    }
?>