<?php 

class Produk {
public $judul = "judul", 
	   $penulis = "penulis",
	   $penerbit = "penerbit",
	   $harga = 0;

	   public function getlabel(){
	   		return "$this->penulis, $this->penerbit";
	   }
}

// $produk1 = new Produk();
// $produk1->judul = "Doraemon";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Doraemon";
$produk3->penulis = "masashi kishimoto";
$produk3->penerbit = "hanum shonen";
$produk3->harga = 150000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "neil druckmann";
$produk4->penerbit = "sony";
$produk4->harga = 150000;

echo "komik :" . $produk3->getlabel();
echo "<br>";
echo "game : " . $produk4->getlabel();
