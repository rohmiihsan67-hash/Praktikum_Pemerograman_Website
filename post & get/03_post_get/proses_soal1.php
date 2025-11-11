<?php
$saldo_awal = $_POST['saldo_awal'];
$bunga      = $_POST['bunga'];   // dalam persen
$bulan      = $_POST['bulan'];

// Rumus: saldo akhir = saldo_awal * (1 + bunga/100)^bulan
$saldo_akhir = $saldo_awal * pow((1 + $bunga/100), $bulan);

echo "<h3>Hasil Simulasi Tabungan Bank X</h3>";
echo "Saldo Awal : Rp " . number_format($saldo_awal,0,",",".") . "<br>";
echo "Bunga per Bulan : $bunga % <br>";
echo "Lama Bulan : $bulan <br>";
echo "Saldo Akhir : Rp " . number_format($saldo_akhir,0,",",".") . "<br>";
?>