<?php 

class Produk {
private $judul, 
	   $penulis,
	   $penerbit,
	   $harga,
		$diskon;
	   
	   public function __construct($judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga= 0){
	   	$this->judul = $judul;
	   	$this->penulis = $penulis;
	   	$this->penerbit = $penerbit;
	   	$this->harga = $harga;
	   }

	   public function setjudul( $judul ){
	   	$this->judul = $judul;
	   }
 		public function getjudul(){
	   	return $this->judul;
	   }

	   public function setpenulis( $penulis ){
	   	$this->penulis = $penulis;
	   }

	   public function getpenulis( $penulis){
	   	return $this->penulis;
	   }

		public function setpenerbit($penerbit){
	   	$this->penerbit = $penerbit;
	   }

	   public function getpenerbit($penerbit){
	   	return $this->penerbit;
	   }

	   public function setdiskon( $diskon ){
	   	$this->diskon = $diskon;
	   }

	   public function getdiskon(){
	   	return $this->diskon;
	   }

	   public function setharga( $harga ){
	   	$this->harga = $harga;
	   }

	   	public function getHarga(){
	   	return $this->harga - ($this->harga * $this->diskon / 100);
	   }

	   public function getlabel(){
	   		return "$this->penulis, $this->penerbit";
	   }
 		public function getInfoProduk(){
	   	$str = " {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
	 
	   	return $str;

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
echo "<hr>";


$produk2->setdiskon(50);
echo $produk2->getHarga();
echo "<hr>";

echo $produk1->getjudul();