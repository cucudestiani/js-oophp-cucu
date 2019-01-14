<?php 

class Produk {
public $judul, 
	   $penulis,
	   $penerbit,
	   $harga,
	   $jmlhalaman,
	   $waktumain;
	   

	   public function __construct($judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga= 0, $jmlhalaman= 0, $waktumain= 0){
	   	$this->judul = $judul;
	   	$this->penulis = $penulis;
	   	$this->penerbit = $penerbit;
	   	$this->harga = $harga;
	   	$this->jmlhalaman = $jmlhalaman;
	   	$this->waktumain = $waktumain;

	   }

	   public function getInfoProduk(){
	   	$str = " {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
	 
	   	return $str;

	   }

	   public function getlabel(){
	   		return "$this->penulis, $this->penerbit";
	   }

	}


	class komik extends Produk{
		public  function getInfoProduk(){
			$str = "komik : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->jmlhalaman} Halaman.";

			return $str;
		}
	}


	class game extends Produk{
		public function getInfoProduk(){
			$str = "game : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->waktumain} jam.";

			return $str;
		}
	}

class CetakInfoProduk {
	public function cetak( Produk $produk) {
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new komik("Doraemon", "masashi kishimoto", "hanum shonen", 150000, 100, 0);

$produk2 = new game("Uncharted", "neil druckmann", "sony", 200000, 0, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
