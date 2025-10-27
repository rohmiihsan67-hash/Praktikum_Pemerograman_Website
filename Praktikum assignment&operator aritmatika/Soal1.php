<?php
$saldoAwal = 1000000;
$bunga = 0.0025;  // 0.25% per bulan
$bulan = 11;

// hitung saldo akhir
$saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);

echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".$saldoAkhir." ,-";
?>
