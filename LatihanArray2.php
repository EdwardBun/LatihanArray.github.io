<?php
//Awal
echo "Nilai Saya : ";
$NilaiAwal = array(80,78,72,84,92,88);
$NilaiAkhir = $NilaiAwal;
echo implode( ' , ', $NilaiAwal); echo "<br>";

//Mencari Nilai Tertinggi
echo "Nilai Tertinggi = " . max($NilaiAwal); echo "<br>";

//Mencari Nilai Terendah
echo "Nilai Terendah = " . min($NilaiAwal); echo "<br>";

//Mengurutkan dari Terkecil sampai Terbesar
echo "Urutan dari Terkecil Hingga Terbesar : ";
sort($NilaiAwal);
echo implode(' , ', $NilaiAwal); echo "<br>";

//Mengurutkan dari Terbesar sampai terkecil
echo "Urutan dari Terbesar Hingga Terkecil : ";
rsort($NilaiAwal);
echo implode(' , ', $NilaiAwal); echo "<br>";

//Rata-Rata Nilai
echo "Rata-rata Nilai : ";
$rata = array_sum($NilaiAwal)/6; 
echo floor($rata); echo "<br>";

//Mengubah 72 menjadi 75
array_splice($NilaiAkhir, 2, 1,75);
echo "Nilai 72 Diubah menjadi 75 : ";
echo implode( ' , ', $NilaiAkhir); echo "<br>";
?>