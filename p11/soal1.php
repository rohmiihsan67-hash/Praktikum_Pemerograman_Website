<!DOCTYPE html>
<html>
<head>
    <title>Hitung Saldo Akhir Nasabah</title>
</head>
<body>
    <h3>Hitung Saldo Akhir Nasabah</h3>
    <form method="POST" action="">
        Masukkan Saldo Awal: <input type="number" name="saldo_awal" value="1000000" required><br><br>
        Jangka Waktu (Bulan): <input type="number" name="bulan" value="1" required><br><br>
        <input type="submit" name="hitung" value="Hitung Saldo">
    </form>
    <hr>

    <?php
    if (isset($_POST['hitung'])) {
        // 1. Ambil input dari form
        $saldo = $_POST['saldo_awal'];
        $durasi = $_POST['bulan'];
        $biaya_admin = 9000;

        echo "Saldo Awal: Rp. " . number_format($saldo, 0, ',', '.') . "<br>";
        echo "Jangka Waktu: " . $durasi . " bulan<br><br>";

        // 2. Mulai Perulangan (Looping) dari bulan 1 sampai bulan ke-N
        $i = 1;
        while ($i <= $durasi) {
            
            // Cek kondisi bunga berdasarkan saldo terakhir
            if ($saldo < 1100000) {
                $bunga_persen = 0.03; // 3%
            } else {
                $bunga_persen = 0.04; // 4%
            }

            // Hitung nominal bunga bulanan (Bunga p.a / 12 bulan)
            $bunga_bulan_ini = ($saldo * $bunga_persen) / 12;

            // Update saldo: Tambah bunga, kurangi admin
            $saldo = $saldo + $bunga_bulan_ini - $biaya_admin;

            // (Opsional) Tampilkan rincian per bulan
            // echo "Bulan ke-$i: Rp. " . number_format($saldo, 2, ',', '.') . "<br>";

            $i++;
        }

        // 3. Tampilkan Hasil Akhir
        echo "<h3>Saldo Akhir setelah $durasi bulan adalah: Rp. " . number_format($saldo, 2, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>