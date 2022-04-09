<?php
class Account {
    public $nama;
    protected $nomor;
    private $saldo;
    
    function __construct($nama,$nomor, $saldo){
        $this -> nama = $nama;
        $this -> nomor = $nomor;
        $this -> saldo = $saldo;
    }
    
    public function deposit($uang){
        $this -> saldo = $this-> saldo + $uang;
    }

    public function withdraw($uang){
        $this -> saldo = $this -> saldo - $uang;
    }

    public function cetak(){
        echo "</br>Nama : ".$this -> nama;
        echo "</br>No Account : ".$this -> nomor;
        echo "</br>Saldo : ".$this -> saldo;
        echo "</br>";
    }
}

$cs1 = new Account ('Ahmad','C001', 6000000);
$cs1 -> deposit(1000000);
$cs1 -> cetak(); 
echo "Ahmad Menabung Uang Sebesar Rp 1.000.000";

echo "</br>";
$cs2 = new Account ('Budi', 'C002', 5350000);
$cs2 -> withdraw(2500000);
$cs2 -> cetak();
echo "Budi Menarik Uang Sebesar Rp. 2.500.000";

echo "</br>";
$cs3 = new Account ('Kurniawan', 'C003',2500000);
$cs3 -> cetak();
?>