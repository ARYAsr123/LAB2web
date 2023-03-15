<html>

<head>
    <title>Program PHP Sederhana</title>
</head>

<body>
    <h2>Form Input Data Diri dan Pekerjaan</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>
        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" required><br><br>
        <label for="pekerjaan">Pekerjaan:</label>
        <select name="pekerjaan" id="pekerjaan" required>
            <option value="">-- Pilih Pekerjaan --</option>
            <option value="Programmer">Programmer</option>
            <option value="Desainer">Desainer</option>
            <option value="Marketing">Marketing</option>
        </select><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $pekerjaan = $_POST['pekerjaan'];
        $umur = date_diff(date_create($tgl_lahir), date_create('today'))->y;

        echo "<h2>Hasil Input Data Diri dan Pekerjaan:</h2>";
        echo "Nama: $nama<br>";
        echo "Tanggal Lahir: $tgl_lahir<br>";
        echo "Umur: $umur tahun<br>";

        if ($pekerjaan == "Programmer") {
            $gaji = 10000000;
        } elseif ($pekerjaan == "Desainer") {
            $gaji = 8000000;
        } elseif ($pekerjaan == "Marketing") {
            $gaji = 6000000;
        }
        echo "Pekerjaan: $pekerjaan<br>";
        echo "Gaji: Rp " . number_format($gaji, 0, ',', '.') . "<br>";
    }
    ?>
</body>

</html>