<!DOCTYPE html>
<html>
<head><title>Hitung Upah Golongan</title></head>
<body>
    <h3>Hitung Upah Berdasarkan Golongan</h3>
    <form method="post" action="">
        Jumlah Jam Kerja: <input type="number" name="jam" required><br><br>
        Golongan: 
        <select name="golongan">
            <option value="A">A (Rp. 4.000)</option>
            <option value="B">B (Rp. 5.000)</option>
            <option value="C">C (Rp. 6.000)</option>
            <option value="D">D (Rp. 7.500)</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Hitung Upah">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $jam = $_POST['jam'];
        $gol = $_POST['golongan'];
        $upah_per_jam = 0;
        $upah_lembur_per_jam = 3000;
        $batas_jam = 48;

        // Tentukan upah per jam berdasarkan golongan
        switch ($gol) {
            case 'A': $upah_per_jam = 4000; break;
            case 'B': $upah_per_jam = 5000; break;
            case 'C': $upah_per_jam = 6000; break;
            case 'D': $upah_per_jam = 7500; break;
            default: $upah_per_jam = 0;
        }

        if ($jam > $batas_jam) {
            // Ada lembur
            $jam_lembur = $jam - $batas_jam;
            $upah_normal = $batas_jam * $upah_per_jam;
            $bayaran_lembur = $jam_lembur * $upah_lembur_per_jam;
            $total_upah = $upah_normal + $bayaran_lembur;
        } else {
            // Tidak ada lembur
            $total_upah = $jam * $upah_per_jam;
        }

        echo "<hr>";
        echo "Golongan: $gol <br>";
        echo "Jam Kerja: $jam jam <br>";
        echo "Total Upah: <b>Rp. " . number_format($total_upah, 0, ',', '.') . ",-</b>";
    }
    ?>
</body>
</html>