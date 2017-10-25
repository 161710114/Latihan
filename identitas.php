<?php
class identitas {
	public $Nama;
	public $Tempatlahir;
	public $Kelas;
	public $Status;
	

	public function __construct($Nama,$Tempatlahir,$Kelas,$Status){
	$this->Nama 		= $Nama;
	$this->Tempatlahir 	= $Tempatlahir;
	$this->Kelas 		= $Kelas;
	$this->Status 		= $Status;
}

	public function get_Nama()
	{
	return $this->Nama;
	}
	public function get_Tempatlahir()
 	{
	return $this->Tempatlahir;
	}
	public function get_Kelas()
 	{
	return $this->Kelas;
	}
	public function get_Status()
 	{
	return $this->Status;
}
 }

?>