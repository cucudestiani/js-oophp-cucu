<?php 
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