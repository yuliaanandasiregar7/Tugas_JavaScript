<?php
require 'konversisuhu.php';

$Suhu1 = new KonversiSuhu('Celcius', 30, 'Fahrenheit');
$Suhu2 = new KonversiSuhu('Celcius', 40, 'Fahrenheit');
$Suhu3 = new KonversiSuhu('Fahrenheit', 86, 'Celcius');
$Suhu4 = new KonversiSuhu('Fahrenheit', 122, 'Celcius');
$Suhu5 = new KonversiSuhu('Celcius', 25, 'Rheamur');

$SuhuArray = [$Suhu1, $Suhu2, $Suhu3, $Suhu4, $Suhu5];

// Cetak data dalam tabel

echo '<h1 align="center">Konversi Suhu</h1>';
echo '<table border="1"  align="center">';
echo '<thead>
        <tr>
            <th>Satuan Suhu Awal</th>
            <th>Besaran Suhu</th>
            <th>Satuan Suhu Tujuan</th>
            <th>Hasil Konversi Suhu</th>
        </tr>
    </thead>';

foreach ($SuhuArray as $Suhu) {
    echo '<tr>';
    echo '<td>' . $Suhu->cetak() . '</td>';
    echo '</tr>';
}

echo '</table>';


?>