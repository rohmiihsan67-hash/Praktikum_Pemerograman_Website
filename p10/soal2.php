<!DOCTYPE html>
<html>
<head><title>Hitung Upah Mingguan</title></head>
<body>
    <h3>Hitung Upah Karyawan Honorer</h3>
    <form method="post" action="">
        Jumlah Jam Kerja (per minggu): <input type="number" name="jam" required>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $jam = $_POST['jam'];
        $upah_per_jam = 2000;
        $upah_lembur = 3000;
        $batas_jam = 48;
        $total_upah = 0;

        if ($jam > $batas_jam) {
            // Hitung lembur
            $jam_lembur = $jam - $batas_jam;
            $upah_normal = $batas_jam * $upah_per_jam;
            $bayaran_lembur = $jam_lembur * $upah_lembur;
            $total_upah = $upah_normal + $bayaran_lembur;
        } else {
            // Tidak ada lembur
            $total_upah = $jam * $upah_per_jam;
        }

        echo "<p>Jam Kerja: $jam jam</p>";
        echo "<p>Total Upah: <b>Rp. " . number_format($total_upah, 0, ',', '.') . ",-</b></p>";
    }
    ?>
</body>
</html>