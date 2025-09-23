<?php
// -------------------
// TUGAS 1
// -------------------
echo "<h3>Tugas 1: String angka bisa dijumlahkan</h3>";
$tugas1 = "90";
$tugas2 = "80";

// PHP otomatis mengonversi string angka ke integer saat penjumlahan
$hasilJumlah = $tugas1 + $tugas2; 
echo "Hasil penjumlahan string angka \"$tugas1\" + \"$tugas2\" = $hasilJumlah <br><br>";

// -------------------
// TUGAS 2
// -------------------
echo "<h3>Tugas 2: Perbedaan operator / dan %</h3>";
$angka1 = 10;
$angka2 = 3;
echo "10 / 3 = " . ($angka1 / $angka2) . " (hasil pembagian)<br>";
echo "10 % 3 = " . ($angka1 % $angka2) . " (sisa bagi)<br><br>";

// -------------------
// TUGAS 3
// -------------------
echo "<h3>Tugas 3: Menggabungkan string tugas1 dan tugas2 menjadi 9080</h3>";
$gabung = $tugas1 . $tugas2; 
echo "Hasil penggabungan string: $tugas1 . $tugas2 = $gabung <br><br>";

// -------------------
// Contoh String dari soal
// -------------------
echo "<h3>Contoh Penulisan String</h3>";
$string1='Ini adalah string sederhana';
$string2="Ini adalah
string yang bisa
memiliki beberapa
baris";
$string3="Dia berkata: \"cieee yang lagi liat tugass wkwk\"";
$string4="Anda telah berhasil menghapus C:\\xampp\\htdoc";
$string5="Kalimat ini akan pindah ke:\n baris baru";
$string6="Variabel juga otomatis ditampilkan: $string1 dan $string3";

echo nl2br($string1) . "<br>";
echo nl2br($string2) . "<br>";
echo nl2br($string3) . "<br>";
echo nl2br($string4) . "<br>";
echo nl2br($string5) . "<br>";
echo nl2br($string6) . "<br>";
?>
