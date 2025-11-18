<?php
// Mengambil angka bulan saat ini (1-12)
$angka_bulan = date("n"); 
$jumlah_hari = 0;
$nama_bulan = "";

// Menggunakan SWITCH untuk menentukan jumlah hari
switch ($angka_bulan) {
    case 1: 
        $nama_bulan = "Januari"; 
        $jumlah_hari = 31; 
        break;
    case 2: 
        $nama_bulan = "Februari"; 
        // Sederhana: 28 atau 29 (tergantung tahun kabisat)
        // Untuk lebih akurat bisa mengecek date("L")
        $jumlah_hari = (date("L") ? 29 : 28); 
        break;
    case 3: 
        $nama_bulan = "Maret"; 
        $jumlah_hari = 31; 
        break;
    case 4: 
        $nama_bulan = "April"; 
        $jumlah_hari = 30; 
        break;
    case 5: 
        $nama_bulan = "Mei"; 
        $jumlah_hari = 31; 
        break;
    case 6: 
        $nama_bulan = "Juni"; 
        $jumlah_hari = 30; 
        break;
    case 7: 
        $nama_bulan = "Juli"; 
        $jumlah_hari = 31; 
        break;
    case 8: 
        $nama_bulan = "Agustus"; 
        $jumlah_hari = 31; 
        break;
    case 9: 
        $nama_bulan = "September"; 
        $jumlah_hari = 30; 
        break;
    case 10: 
        $nama_bulan = "Oktober"; 
        $jumlah_hari = 31; 
        break;
    case 11: 
        $nama_bulan = "November"; 
        $jumlah_hari = 30; 
        break;
    case 12: 
        $nama_bulan = "Desember"; 
        $jumlah_hari = 31; 
        break;
}

echo "<h3>Informasi Bulan Ini</h3>";
echo "Bulan sekarang: <b>$nama_bulan</b> <br>";
echo "Jumlah hari: <b>$jumlah_hari hari</b>";
?>