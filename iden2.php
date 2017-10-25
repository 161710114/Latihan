<?php
require_once  'identitas.php';
$identitas = new identitas('Ica Cahyani', 'Bandung', 'XI RPL 1', 'Menikah');
echo 'Namanya.. '.$identitas->get_Nama().'<br>';
echo 'Tempat Lahir.. '.$identitas->get_Tempatlahir().'<br>';
echo 'Kelas '.$identitas->get_Kelas().'<br>';
echo 'Status '.$identitas->get_Status().'<br><br>'; 

$identitas = new identitas('Penti', 'Bandung', 'XI RPL 2', 'Pacaran');
echo 'Namanya.. '.$identitas->get_Nama().'<br>';
echo 'Tempat Lahir.. '.$identitas->get_Tempatlahir().'<br>';
echo 'Kelas '.$identitas->get_Kelas().'<br>';
echo 'Status '.$identitas->get_Status().'<br><br>';

$identitas = new identitas('Desri', 'Bandung', 'XI TKR 1', 'Pacaran');
echo 'Namanya.. '.$identitas->get_Nama().'<br>';
echo 'Tempat Lahir.. '.$identitas->get_Tempatlahir().'<br>';
echo 'Kelas '.$identitas->get_Kelas().'<br>';
echo 'Status '.$identitas->get_Status().'<br><br>';

$identitas = new identitas('Salsa', 'Jakarta', 'XI RPL 3', 'Single');
echo 'Namanya.. '.$identitas->get_Nama().'<br>';
echo 'Tempat Lahir.. '.$identitas->get_Tempatlahir().'<br>';
echo 'Kelas '.$identitas->get_Kelas().'<br>';
echo 'Status '.$identitas->get_Status().'<br><br>';

$identitas = new identitas('Vani', 'Yogya', 'XI RPL 2', 'Jopisa');
echo 'Namanya.. '.$identitas->get_Nama().'<br>';
echo 'Tempat Lahir.. '.$identitas->get_Tempatlahir().'<br>';
echo 'Kelas '.$identitas->get_Kelas().'<br>';
echo 'Status '.$identitas->get_Status().'<br><br>';
?>