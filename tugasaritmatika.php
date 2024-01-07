<?php
// Nilai yang diberikan
$pemasukan = 50000000;
$hutang_a = 16500000;
$bunga_hutang_a = 0.05;
$hutang_b = 9500000;
$bunga_hutang_b = 0.045;

// Perhitungan
$jumlah_bunga_a = $hutang_a * $bunga_hutang_a;
$jumlah_bunga_b = $hutang_b * $bunga_hutang_b;
$jumlah_total_bunga = $jumlah_bunga_a + $jumlah_bunga_b;

$jumlah_total_hutang = $hutang_a + $hutang_b;

$sisa_uang = $pemasukan - $jumlah_total_hutang;

// Tampilkan hasil
echo "Berapa sisa uang? Sisa uang adalah: " . number_format($sisa_uang, 0, ',', '.') . "<br>";
echo "Berapa jumlah total bunga hutang? Jumlah total bunga hutang adalah: " . number_format($jumlah_total_bunga, 0, ',', '.') . "<br>";
echo "Berapa jumlah total hutang? Jumlah total hutang adalah: " . number_format($jumlah_total_hutang, 0, ',', '.') . "<br>";
?>
