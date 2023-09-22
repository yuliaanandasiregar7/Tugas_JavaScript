<!DOCTYPE html>
<html>
<head>
    <title>Populasi Data Diri</title>
</head>
<body>
    <h1>Populasi Data Diri</h1>

    <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $pekerjaan = $_POST['pekerjaan'];
        $hobby = $_POST['hobby'];

        // Simpan data ke dalam tabel populasi
        echo "<table border='1'>";
        echo "<tr><th>Nama</th><th>Pekerjaan</th><th>Hobby</th></tr>";
        echo "<tr><td>$nama</td><td>$pekerjaan</td><td>$hobby</td></tr>";
        echo "</table>";
    } else {
        echo "Data belum disimpan.";
    }
    ?>

    <br><br>
    <a href="datadiri.html">Kembali ke Form</a>
</body>
</html>