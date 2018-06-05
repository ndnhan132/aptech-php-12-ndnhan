<?php
    class DongVat
    {
        // Thuộc Tính
        var $mat = '';
        var $mui = '';
        var $mieng = '';
        var $chan = '';
        var $gioitinh = '';
    
        // Hàm, phương thức
        function an(){
            echo $this->mat ."<br>";
        }
    
        function ngu(){
            echo $this->mui."<br>";
        }
    
        function chay(){
            echo $this->mieng."<br>";
        }
    
        function lahet(){
            echo $this->chan."<br>";
        }
    }

    class ConTrau extends DongVat {
    

        var $sung = '';
        function sung(){
            echo $this->sung."<br>";
        }
    }

$trau =new ConTrau();
$trau->mat= "mat";
$trau->mui= "mui";
$trau->mieng="mieng";
$trau->chan= "chan";
$trau->sung= "sung";

$trau->an();
$trau->ngu();
$trau->chay();
$trau->lahet();
$trau->sung();