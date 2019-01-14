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

	   public function getInfoProduk(){
	   	$str = " {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
	 
	   	return $str;

	   }

	   public function getlabel(){
	   		return "$this->penulis, $this->penerbit";
	   }

	}


	class komik extends Produk{
		public $jmlhalaman;

		public function __construct( $judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga= 0, $jmlhalaman= 0){

			parent::__construct( $judul, $penulis, $penerbit, $harga);

			$this->jmlhalaman = $jmlhalaman;
		}

		public  function getInfoProduk(){
			$str = "komik : " . parent::getInfoProduk() . "- {$this->jmlhalaman} Halaman.";

			return $str;
		}
	}


	class game extends Produk{
		public $waktumain;

		public function __construct($judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga= 0, $waktumain= 0 ){
		parent::__construct( $judul, $penulis, $penerbit, $harga);

		$this->waktumain = $waktumain;
		}

		public function getInfoProduk(){
			$str = "game :  " . parent::getInfoProduk() . "- {$this->waktumain} jam.";

			return $str;
		}
	}

class CetakInfoProduk {
	public function cetak( Produk $produk) {
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new komik("Doraemon", "masashi kishimoto", "hanum shonen", 150000, 100);

$produk2 = new game("Uncharted", "neil druckmann", "sony", 200000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
