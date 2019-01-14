<?php

require_once 'App/init.php';

$produk1 = new komik("Doraemon", "masashi kishimoto", "hanum shonen", 150000, 100);

$produk2 = new game(
	"Uncharted", "neil druckmann", "sony", 200000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();