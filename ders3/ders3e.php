<?php

class Kutuphane{

    public $libraryName = "adü kütüphane";
    public const YEAR = 1980;

}

class yenikutuphane extends Kutuphane {

    public function getInfo()
    {
        $text = "kütüphane her gün 08:00 - 18:00 arasında hizmet vermektedir.";
        $kutuphaneAdi = $this->libraryName;
        $kurulus = self::YEAR;

        return "$text - $kutuphaneAdi - $kurulus";

    }

}

$yeniNesne = new yenikutuphane;
echo $yeniNesne->getInfo();

?>