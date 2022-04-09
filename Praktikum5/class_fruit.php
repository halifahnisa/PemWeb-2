<?php
class Fruit {
    //buat property
    public $name;
    protected $color;
    private $weight;

    //buat method
    public function set_color($c){
        return $this->color = $c;
    }
    public function set_weight($w){
        return $this->weight = $w;
    }
}

//buat object
$mangga = new Fruit();
echo $mangga -> name = 'Mangga';
echo "<br/>";
echo $mangga -> set_color ('hijau');
echo "<br/>";
echo $mangga -> set_weight('300kg');
?> 