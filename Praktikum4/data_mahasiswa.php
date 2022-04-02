<?php
require_once "class_Mahasiswa.php";
$ms = new mahasiswa("01102", "Anisa","TI", 2021,  3.7);
$ms1 = new mahasiswa("01112", "Indah","SI", 2020,  3.5);
$ms2 = new mahasiswa("01103", "Dwi", "SI", 2019,  3.6);
$ms3 = new mahasiswa("01101", "Ridwan", "TI", 2018,  3.9);

echo"<br/>NIM : ".$ms3->nim;
echo"<br/>Nama : ".$ms3->nama;
echo "<br/> Prodi : ".$ms3->prodi;
echo "<br/> Tahun Angkatan : ".$ms3->thn_angkatan;
echo "<br/> IPK : ".$ms3->ipk;
echo "<br/> Predikat : ".$ms3->predikat_ipk (); 
?>