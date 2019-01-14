<?php 

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