<?php 

interface InfoProduk{
	public function getInfoProduk();
}

abstract class Produk {
protected $judul, 
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

	   abstract public function getInfo(); 
	}


	class komik extends Produk implements InfoProduk{
		public $jmlhalaman;

		public function __construct( $judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga= 0, $jmlhalaman= 0){

			parent::__construct( $judul, $penulis, $penerbit, $harga);

			$this->jmlhalaman = $jmlhalaman;
		}

		public function getInfo(){
	   	$str = " {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
	 
	   	return $str;

	   }

		public  function getInfoProduk(){
			$str = "komik : " . $this->getInfo() . "- {$this->jmlhalaman} Halaman.";

			return $str;
		}
	}

	class game extends Produk implements InfoProduk {
		public $waktumain;

		public function __construct($judul ="judul", $penulis="penulis", $penerbit="penerbit", $harga= 0, $waktumain= 0 ){
		parent::__construct( $judul, $penulis, $penerbit, $harga);

		$this->waktumain = $waktumain;
		}

		public function getInfo(){
	   	$str = " {$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
	 
	   	return $str;

	   }

		public function getInfoProduk(){
			$str = "game :  " . $this->getInfo() . "- {$this->waktumain} jam.";

			return $str;
		}
	}


class CetakInfoProduk {
	public $daftarProduk = array();

	public function tambahProduk(Produk $produk){
		$this->daftarProduk[] = $produk;

	}


	public function cetak( ) {
		$str = "DAFTAR PRODUK : <br>";

		foreach( $this->daftarProduk as $p){
			$str .= "- {$p->getInfoProduk()} <br>";
		}
		return $str;
	}
}


$produk1 = new komik("Doraemon", "masashi kishimoto", "hanum shonen", 150000, 100);

$produk2 = new game(
	"Uncharted", "neil druckmann", "sony", 200000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

