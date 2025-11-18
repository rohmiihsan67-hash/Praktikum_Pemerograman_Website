<!DOCTYPE html>
<html>
<head><title>Cek Tahun Kabisat</title></head>
<body>
    <h3>Cek Tahun Kabisat</h3>
    <form method="post" action="">
        Masukkan Tahun: <input type="number" name="tahun" required>
        <input type="submit" name="submit" value="Cek">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $tahun = $_POST['tahun'];
        
        // Logika Tahun Kabisat:
        // Habis dibagi 4 DAN (tidak habis dibagi 100 ATAU habis dibagi 400)
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
            echo "<p>Tahun <b>$tahun</b> adalah <b>TAHUN KABISAT</b>.</p>";
        } else {
            echo "<p>Tahun <b>$tahun</b> adalah <b>BUKAN TAHUN KABISAT</b>.</p>";
        }
    }
    ?>
</body>
</html>