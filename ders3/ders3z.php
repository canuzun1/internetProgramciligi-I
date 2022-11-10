<?php

class dersler{

    public function java(){
        return "java kurs içeriği";
    }
    public function php(){
        return "php kurs içeriği";
    }
    public function sql(){
        return "sql kurs içeriği";
    }


}


class egitmenler extends dersler{

    public function java(){
        $kim = "erkan güler -" . parent::java();
        return $kim;
    }

    public function php(){
        $kim = "mehmet can hanaylı -" . parent::php();
        return $kim;
    }

    public function sql(){
        $kim = "taner karataş -" . parent::sql();
        return $kim;
    }

    /* miras alınan sınıfın içerisindeki methodu çağır */
    public function extendMethod(){
        return parent::java();
    }
    /* bu sınıfın içerisindeki metodu cağır. */
    public function sinifinMethodu(){
        return $this->java();
    }

}

$hocalar = new egitmenler;

echo $hocalar->java();
echo "<br>";
echo $hocalar->php();
echo "<br>";
echo $hocalar->sql();


?>