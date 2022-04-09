<?php
require_once 'class_dispenser.php';
$vit = new Dispenser();
echo "Nama Minumann : ".$vit -> nama = 'vit';
echo '</br>';
echo "Volume Botol Minuman : ".$vit -> isi(1000). "ml";
echo '</br>';
echo "1 Gelas Seharga : ".$vit -> harSe('Rp. 5000');
echo '</br';
echo "Raisa Membeli 1 gelas vit dengan Harga ".$vit -> harSe('Rp. 5000')." dengan volume gelas sebesar ". $vit -> volGe(250). "ml";
echo '</br>';
echo "Sisa Volume botol minuman Aqua gelas sebesar : ".$vit -> isi(1000) - $vit -> volGe(250). " ml";
?> 