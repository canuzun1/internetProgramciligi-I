<?php

class personelislemleri{

    public $isimsoyisim;
    public $gelir;
    public $gider;

    public function __construct($isim,$gelir,$gider)
    {
        $this->isimsoyisim = $isim;
        $this->gelir = $gelir;
        $this->gider = $gider;

    }

    public function aylikDurumHesapla(){
        return ($this->gelir - $this->gider);
    }

    public function yillikDurumHesapla(){
        return (($this->gelir - $this->gider)*12);
    }

    

}


class ElemanlarDahili extends personelislemleri{

    public function aylikDurumHesapla(){
        return parent::aylikDurumHesapla();
    }
    public function yillikDurumHesapla(){
        return "şirket içindeki personelin yıllık durumu burada hesaplanır";
    }
}

class ElemanlarHarici extends personelislemleri{

    /* firma dışı personeller */

}

$dahili = new ElemanlarDahili("ahmet yılmaz", 25000,20000);
echo $dahili->aylikDurumHesapla();
echo "<br>";
echo $dahili->yillikDurumHesapla();


echo "<br><br><br> Şirket dışı elemanlar<br>";

$harici = new ElemanlarHarici("mehmet yılmaz", 22000, 20000);
echo $harici->aylikDurumHesapla();
echo "<br>";
echo $harici->yillikDurumHesapla();



?>