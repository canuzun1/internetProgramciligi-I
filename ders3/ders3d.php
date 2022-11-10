<?php

use Kutuphane as GlobalKutuphane;

class Kutuphane{

    private $libraryName = "adü kütüphane";
    private const YEAR = 1980;

    public function getInfo(){
        $text = "kütüphane her gün saat 08:00 - 18:00 arasında hizmet vermektedir.";
        
        $isim = $this->libraryName;
        $kurulus = self::YEAR;
        return "$text - $isim - ($kurulus)";


    }
}

$nesne = new Kutuphane;

echo $nesne->getInfo();

?>