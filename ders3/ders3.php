<?php

class Welcome{

    public function hello($isim= "jhon" , $soyisim = "doe"){
        $text = "merhaba sisteme giriş yaptınız $isim $soyisim";
        return $text;
    }

}

$nesne= new Welcome;

echo $hello1 = $nesne ->hello("ahmet", "yenilmez");
echo "<br>";
echo $hello2 = $nesne ->hello();
echo "<br>";

$isim = "ayse";
$soyisim = "can";
/* paremetrelerin sırası önemli */
echo $hello3 = $nesne ->hello($soyisim,$isim);
echo "<br>";

/* 
    Access Modifier (Erişim Belirleyiciler)

    public   : Genel her yerden erişim açık olduğunu ifade eder.
    private  : Özel, yalnızca sınıf içerisinden erişilebilir.
    protected: Korumalı, sınıf içerisinden ve üretilen sınıflardan erişilebilir.

    static   : Sabit sınıf içerisindeki herhangi bir özellik veya metoda sınıf çağırılmadan ulaşılabilir.

    $this    : Bu sınıfta şeklinde sınıf işaret etmek için kullanılır.
    self::   : Kendi sınıfımda, şeklinde sınıfı işaret etmek için kullanılır.
    parent:: : Ebeveyn sınıfımda, şeklinde sınıfı işaret etmek için kullanılır.
*/

/* public örneği */
class Kutuphane{

    private $libraryName = "adü kütüphane";/* dışarıdan erişilemez */
    private const YEAR = 1980;/* dışarıdan erişilemez */

    private function getInfo()/* dışarıdan erişilemez */{
        $text = "kütüphane her gün saat 08:00 - 18:00 arasında hizmet vermektedir.";
        return $text;
    }

    /* fonksiyon ile private bir özellik değiştirilebilir */
    public function kutuphaneninAdiniDegistir($kutuphaneAdi){
        $this->libraryName = $kutuphaneAdi;
    }

    /* fonksiyon ile private bir özellik dışarıya gönderildi */
    public function KutuphaneAdiGetir(){
        return $this->libraryName;
    }

    /* fonksiyon ile private bir özellik dışarıya gönderildi */
    public function YilGoster(){
        return self::YEAR;
    }

    /* fonksiyon ile private bir özellik dışarıya gönderildi */
    public function bilgigoster(){
        return $this->getInfo();
    }


}
$nesne = new Kutuphane;

/* private değişken ve fonksiyonlara erişmek */
echo $nesne->KutuphaneAdiGetir();
echo "<br>";
echo $nesne->YilGoster();
echo "<br>";
echo $nesne->bilgigoster();

/* private olan kütüphane isminin, public bir fonksiyon yardımı ile değiştirilmesi. */
echo $nesne->kutuphaneninAdiniDegistir("kayseri");
echo "<br>";
echo $nesne->KutuphaneAdiGetir(); //kütüphanenin değiştirilen ismi gelecektir.



echo "kütüphanenin adı: $nesne->libraryName"; /* private olduğu için hata verecek */
echo "<br>";
echo "kütüphanen kuruluş yılı: " . $nesne::YEAR; /* private olduğu için hata verecek */
echo "<br>";
echo $nesne->getInfo(); /* private olduğu için hata verecek */





?>