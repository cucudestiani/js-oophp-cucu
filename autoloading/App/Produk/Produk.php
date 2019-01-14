<?php 
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