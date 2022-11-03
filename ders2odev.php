<?php
/* 
Uygulama-1
1. Kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
2. constract metodunda 3 tane değişken alarak bu değişkenleri sınıf içerisindeki değişkenlere atayınız.
3. sınıf içerisine public 2 tane metot yazınız.
4. Birinci metotta  girilen sayının karesi ekrana yazdırılsın.
5. İkinci metotta  girilen sayıya kadar tüm sayıların karesi alt alta ekrana yazdırılsın.
*/

class odev 
{
    public function __construct($marka, $model, $yil)
    {
        $connection = "$marka, $model, $yil";
        return $connection;
    }

    public $marka = "peugeot ";
    public $model = "3008";
    public $yil = "2021";


    public function kareal(){
        $sayi1 = 15;

        $sonuc = pow($sayi1,2);
        echo $sonuc;
    }

    public function hepsikareal(){
        $sayi2 = 9;

        for ($sayi2=0; $sayi2 < $sayi2 ; $sayi2++) { 
            echo $sayi2." sayısının karesi = ".pow($sayi2,2)."\r\n";
        }
    }

}
/*
Uygulama-2
1. Kendi belirleyeceğiniz isimde bir sınıf oluşturunuz.
2. Construct metodunda bir karşılama mesajını ekrana yazdırınız.
3. Destruct metodunu yazınız ve çalıştığını gösteren bir metni ekrana yazdırınız.
4. sınıf içerisine public 2 tane metot yazınız.
5. Birinci metoda parametre olarak gönderilen vize ve final notlarını alarak, ortalama hesabı yaptırıp 50'nin üzerindeyse geçtiğini ekrana yazdırınız.
6. İkinci metotda  parametre olarak gelen sayının faktöryel hesabını yaptırarak ekrana sonucunu yazdırınız. 
*/

class odev2{

    function __construct()
    {
        echo"merhaba";
    }

   

    public function ort (){

    $vize = 60;
    $final = 80;
    $ortalamavize = ($vize*40)/100;
    $ortalamafinal = ($final*60/100);
    $ortalama = $ortalamafinal+$ortalamavize;
    
    if($ortalama >= 50) {
        echo "Geçtiniz - Notunuz : $ortalama";
    } else {
        echo "kaldınız - notunuz : $ortalama";
    }

    }

    public function fak() {
        $sayii=25;
        if($sayii){
            if($sayii < 0){
                echo "Negatif sayıların faktöriyeli hesaplanamaz.";
            }else{
                $sonuc = 1;
                for ($i=1; $i <= $sayii; $i++) { 
                    $sonuc = $sonuc * $i;
                }
            
                echo $sayii." sayısının faktöriyeli= ". $sonuc;
            }
        }

    }
    
    public function __destruct()
    {
        echo "baybay:D";
    }

}

?>