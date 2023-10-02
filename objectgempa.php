<?php
require 'gempa.php';

$g1 =  new Gempa('Banten', 1);
$g2 =  new Gempa('Banten 2', 3);
$g3 =  new Gempa('Banten 3', 5);
$g4 =  new Gempa('Banten 4', 6);


$g1->cetak();
$g2->cetak();
?>