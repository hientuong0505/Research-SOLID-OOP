<?php
    interface BangDanMoRong
    {
        public function danMoRong();
    }

    //Không phải loại vũ khí nào cũng có thể có mở rộng băng đạn của mình
    class VuKhi
    {
        public $soDan;
        public $loaiVuKhi;

        function __construct($soDan, $loaiSung)
        {
            $this->soDan = $soDan;
            $this->loaiSung = $loaiSung;
        }
    }   

    class SungLuc extends VuKhi implements BangDanMoRong
    {
        public function tachTachTach()
        {
            echo "Loại súng này khi bắn có tiếng tạch tạch tạch";
        }

        //Implements lại function danMoRong của BangDanMoRong khi cần
        public function danMoRong()
        {
            echo "Súng lục có thể mở rộng băng đạn ở phía dưới tay cầm của nó";
        }
    }

    //Lựu đạn thì không thể mở rộng băng đạn được
    class LuuDan extends VuKhi
    {
        public function nemLuuDan()
        {
            echo "Lựu đạn dùng để ném";
        }
    }

    $sungLuc = new SungLuc(7, "Loại súng ngắn");
    $luuDan = new LuuDan(1, "Loại lựu đạn nổ");

    echo $sungLuc->danMoRong();
    echo "<br>********<br>";
    echo $luuDan->nemLuuDan();
?>