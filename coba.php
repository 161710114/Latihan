<?php
class kucing{
	public $suara ='meong';
	public $berat = 20;
}

class kupukupu{
	public $warna ='pink';
	public $sayap = 2;
}
class kelinci{
	public $warna ='putih';
	public $mata = 2;
}
class ular{
	public $warna ='hitam';
	public $panjang = 2;
}
class panda{
	public $warna ='hitamputih';
	public $tangan = 2;
}


$kucing1 = new kucing;
echo "suara kucing adalah " .$kucing1->suara. '<br>';
echo "berat kucing adalah " .$kucing1->berat. '<br>';


$kupukupu1 = new kupukupu;
echo "warna kupukupu adalah ".$kupukupu1->warna. '<br>';
echo "sayap kucing ada " .$kupukupu1->sayap. '<br>';

$kelinci1 = new kelinci;
echo "warna kelinci adalah ".$kelinci1->warna. '<br>';
echo "mata kelinci ada " .$kelinci1->mata. '<br>';

$ular1 = new ular;
echo "warna ular adalah ".$ular1->warna. '<br>';
echo "panjang ular adalah " .$ular1->panjang. '<br>';

$panda1 = new panda;
echo "warna panda adalah ".$panda1->warna. '<br>';
echo "tangan panda ada " .$panda1->tangan. '<br>';







?>