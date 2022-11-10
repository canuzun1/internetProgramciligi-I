<?php

class Kutuphane{

    protected $libraryName = "adü kütüphane";
    protected const YEAR = 1980;
    public function kitapsay(){
        echo "kitaplar sayılıyor";
    }

}

class yenikutuphane extends Kutuphane {

    public function getInfo()
    {
        $text = "kütüphane her gün 08:00 - 18:00 arasında hizmet vermektedir.";
        $kutuphaneAdi = $this->libraryName;
        $kurulus = self::YEAR;/* extend edilen sınıfın içerisindeki sabitleri */

        $sayim = parent::kitapsay();/* parent: dahil olunan sınıfın içersindeki fonksiyonu çağırır */
        return "$text - $kutuphaneAdi - $kurulus";

    }

}

$yeniNesne = new yenikutuphane;
echo $yeniNesne->getInfo();

?>