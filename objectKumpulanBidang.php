<?php
require_once 'lingkaran.php';
require_once 'persegiPanjang.php';
require_once 'segitiga.php';

// Membuat objek
$lingkaran = new Lingkaran(21);
$persegiPanjang = new PersegiPanjang(8, 16);
$segitiga = new Segitiga(2, 6);

// Menyimpan objek dalam array
$bidangArray = [$lingkaran, $persegiPanjang, $segitiga];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kumpulan Bidang</title>
    <h1 align="center">Kumpulan Bidang</h1>
</head>
<body>
    <table border="1" align="center" width="80%" height="50%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bidang</th>
                <th>Keterangan</th>
                <th>Luas Bidang</th>
                <th>Keliling Bidang</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($bidangArray as $bidang) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $bidang->namaBidang() . "</td>";
                echo "<td>" . $bidang->keterangan(). "</td>"; //keterangan
                echo "<td>" . $bidang->luasBidang() . "</td>";
                echo "<td>" . $bidang->kelilingBidang() . "</td>";
                echo "</tr>";
                $no++;
                $keterangan;
            }
            ?>
        </tbody>
    </table>
</body>
</html>