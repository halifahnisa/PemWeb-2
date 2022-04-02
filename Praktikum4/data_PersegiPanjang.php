<?php
require_once "class_persegiPanjang.php";

$persegipnjng1 = new persegiPanjang(10, 7);
$persegipnjng2 = new persegiPanjang(8, 5);

echo "<br>Luas Persegi Panjang I : ".$persegipnjng1->getLuas();
echo "<br>Luas Persegi Panjang II : ".$persegipnjng2->getLuas();

echo "<br>Keliling Persegi Panjang I : ".$persegipnjng1->getKeliling();
echo "<br>Keliling Persegi Panjang II : ".$persegipnjng2->getKeliling();
?>