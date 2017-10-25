<?php
class aritmatika {
	public $bil1;
	public $bil2;

	Public function set_nilai($bilangan1,$bilangan2)
	{
		$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;
	}
	public function get_nilai()
{
return $this->bil1 + $this->bil2; 
}
}
$penjumlahan1 = new aritmatika;
$penjumlahan1->set_nilai(6,12);
echo "hasil: " .$penjumlahan1->get_nilai(). '<br>';
?>