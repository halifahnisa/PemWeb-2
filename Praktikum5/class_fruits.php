<?php
class Fruits{
    public $name;
    public $warna;

    public function __construct($name, $warna){
        $this->name = $name;
        $this->warna = $warna;
    }
    public function intro(){
        echo "<br/> Nama Aku adalah {$this->name} dan warna Aku adalah {$this->warna}";
    }
}

class Strawberry extends Fruits{
    public function message(){
        echo "<br/> Aku adalah sebuah strawberry atau pisang";
    }
}

$buah = new Strawberry("Starwberry", "Merah");
$buah->intro();
$buah->message();
?>