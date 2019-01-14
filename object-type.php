<?php 

class Produk {
public $judul, 
	   $penulis,
	   $penerbit,
	   $harga;

	   public function __construct($judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga= 0){
	   	$this->judul = $judul;
	   	$this->penulis = $penulis;
	   	$this->penerbit = $penerbit;
	   	$this->harga = $harga;

	   }

	   public function getlabel(){
	   		return "$this->penulis, $this->penerbit";
	   }
}

class CetakInfoProduk {
	public function cetak( Produk $produk) {
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("Doraemon", "masashi kishimoto", "hanum shonen", 150000);

$produk2 = new Produk("Uncharted", "neil druckmann", "sony", 200000);

echo "komik :" . $produk1->getlabel();
echo "<br>";
echo "game : " . $produk2->getlabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
