<?php
//contoh fungsi bawaan dari PHP
$str = 'Belajar PHP di kampus Merdeka';
echo $str;

$str = strtoupper($str);
echo'<br>' .$str;
$str = strtolower($str);
echo'<br>'.$str;

$ar_buah = ['pepaya', 'Mangga', 'Pisang', 'Jambu', 'Apel'];
sort($ar_buah); //mengurutkan atau memilah sesuai abjad
foreach($ar_buah as $buah){
    echo'<br>'.$buah;
}
echo'<hr>';
arsort($ar_buah);//mengurutkan atau memilah dari z-a
foreach($ar_buah as $buah){
    echo'<br>'.$buah;
}
?>