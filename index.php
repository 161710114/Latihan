
<?php
class Hewan{
	var $kucing;
	var $sapi;
	var $kelinci;
	var $kupukupu;
      function ab() 
      { 
		$kucing='putih';
		return "warna hewan Ini Adalah ".$kucing."<br/>"; 
	  }
	  function bc()
	  {
		$sapi='50 kg';
		return "Berat Badan hewan Ini Adalah ".$sapi."<br/>"; 
	  }
	  function cd()
	  {
		$kelinci='2';
		return "Telinganya ada berapa ? ".$kelinci."<br/>"; 
	  }
	  function de()
	  {	
		$kupukupu='2';
		return "sayapnya ada berapa? ".$kupukupu."<br/>"; 
      } 

} 
$m= new hewan();
echo $m->ab();
echo $m->bc();
echo $m->cd();
echo $m->de();
?>  