<?php
require_once 'dosen.php';
require_once 'mahasiswa.php';
require_once 'staff.php';

$d1 = new Dosen('yula', 'P', '01110221073', 'S.Kom');
$m1 = new Mahasiswa('anwar', 'L', 3,'TI');
$s1 = new Staff('masna', 'P', '98390','Agama',  5000000);

$data = [$d1, $m1, $s1];

echo '<h3> Data civitas Kampus </h3>';
echo '<p>';

foreach($data as $d){
    echo $d->cetak();
}

echo '</p>';

?>