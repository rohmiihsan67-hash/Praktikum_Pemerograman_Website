<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Soal 2: Hitung Saldo Nasabah</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        .hasil { background: #e0f7fa; padding: 15px; border: 1px solid #006064; margin-top: 20px; }
    </style>
</head>
<body>
    <h2>Soal 3: Perhitungan Saldo Bank</h2>
    
    <form method="POST" action="">
        <label>Saldo Awal (Rp):</label><br>
        <input type="number" name="saldo_awal" value="1000000" required><br><br>
        
        <label>Jangka Waktu (Bulan):</label><br>
        <input type="number" name="bulan" value="6" required><br><br>
        
        <input type="submit" name="hitung" value="Hitung Hasil">
    </form>

    <?php
    // Kode PHP dijalankan saat tombol ditekan
    if (isset($_POST['hitung'])) {
        $saldo = $_POST['saldo_awal'];
        $n_bulan = $_POST['bulan'];
        $biaya_admin = 9000;
        
        // Variabel bantu untuk loop
        $i = 1;

        echo "<div class='hasil'>";
        echo "<strong>Saldo Awal:</strong> Rp " . number_format($saldo, 0, ',', '.') . "<br>";
        echo "<strong>Lama Menabung:</strong> $n_bulan bulan<br><hr>";

        // PERULANGAN (WHILE)
        while ($i <= $n_bulan) {
            // 1. Tentukan Persentase Bunga
            if ($saldo < 1100000) {
                $persen_bunga = 0.03; // 3%
            } else {
                $persen_bunga = 0.04; // 4%
            }

            // 2. Hitung Bunga Bulanan (Bunga p.a dibagi 12)
            $bunga_rupiah = ($saldo * $persen_bunga) / 12;

            // 3. Update Saldo (Tambah Bunga, Kurang Admin)
            $saldo = $saldo + $bunga_rupiah - $biaya_admin;

            // Naikkan counter bulan
            $i++;
        }

        echo "<h3>Saldo Akhir: Rp " . number_format($saldo, 2, ',', '.') . "</h3>";
        echo "</div>";
    }
    ?>
</body>
</html>