<?php 
    //ini adalah perintah php
    $nama = "yulia"; // type data string
    $umur = 20; // type data integer
    $berat_badan = 60.3; //type data float
    $pekerjaan = 'Mahasiswa'; 
    $status = true;

    $jari2 = 15;
    define('PHI', 3.14);

    $luas = PHI * $jari2 * $jari2;

    echo '<br> Nama Masiswa : '. $nama;
    echo '<br> umur Masiswa : '. $umur;
    echo '<br> Berat Badan : '. $berat_badan;
    echo '<br> pekerjaan : '. $pekerjaan;
    echo '<br> status : '. $status;

    echo "<br> Nama Masiswa 2 : $nama";
  
    //contoh pemanggilan variabel di dalam php

?>

<hr>
<br> Siswa : <?= $nama ?>
<p>Umur : <?= $umur ?></p>
<p>Luas jari jari diatas adalah <?=$luas?></p>