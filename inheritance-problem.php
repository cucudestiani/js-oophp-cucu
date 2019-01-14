<?php 

class Produk {
public $judul, 
	   $penulis,
	   $penerbit,
	   $harga,
	   $jmlhalaman,
	   $waktumain,
	   $tipe;

	   public function __construct($judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga= 0, $jmlhalaman= 0, $waktumain= 0, $tipe){
	   	$this->judul = $judul;
	   	$this->penulis = $penulis;
	   	$this->penerbit = $penerbit;
	   	$this->harga = $harga;
	   	$this->jmlhalaman = $jmlhalaman;
	   	$this->waktumain = $waktumain;
	   	$this->tipe = $tipe;

	   }

	   public function getInfoLengkap(){
	   	$str = "{$this->tipe} : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
	   	if( $this->tipe == "komik"){
	   		$str .= " - {$this->jmlhalaman} Halaman.";
	   	} else if( $this->tipe == "game"){
	   		$str .= " - {$this->waktumain} jam.";
	   	}
	   	return $str;

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

$produk1 = new Produk("Doraemon", "masashi kishimoto", "hanum shonen", 150000, 100, 0, "komik");

$produk2 = new Produk("Uncharted", "neil druckmann", "sony", 200000, 0, 50, "game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
