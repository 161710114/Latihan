<?php
require_once  'robot.php';
$robot1 = new robot('haliii',30);
echo 'suara robot '.$robot1->get_suara().'';
echo ' berat robot '.$robot1->get_berat().' kg';



?>