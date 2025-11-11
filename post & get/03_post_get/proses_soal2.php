<?php
$jumlah = $_POST['jumlah'];

$pecahan = [100000, 50000, 20000, 5000, 100, 50];
$hasil = [];

$sisa = $jumlah;
foreach ($pecahan as $p) {
    $hasil[$p] = intdiv($sisa, $p);
    $sisa = $sisa % $p;
}

echo "<h3>Hasil Pecahan Uang</h3>";
echo "Jumlah Uang : Rp " . number_format($jumlah,0,",",".") . "<br><br>";

foreach ($hasil as $p => $n) {
    echo "Rp " . number_format($p,0,",",".") . " : $n lembar<br>";
}

if ($sisa > 0) {
    echo "Sisa tidak dapat dipecah: Rp " . number_format($sisa,0,",",".");
}
?>