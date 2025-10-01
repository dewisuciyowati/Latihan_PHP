<?php
echo "TUGAS 1: Fungsi Bilangan Terbesar  <br>";

function terbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

$bil1 = 100;
$bil2 = 150;

echo "Dari bilangan $bil1 dan $bil2, bilangan terbesarnya adalah: " . terbesar($bil1, $bil2);
echo "<br><br>";

// =================================================
echo "TUGAS 2: Tampilkan Tanggal dengan getdate() <br>";

$sekarang = getdate();
echo "Sekarang Tanggal: " . $sekarang["mday"] . "-" . $sekarang["mon"] . "-" . $sekarang["year"];
echo "<br><br>";

// =================================================
echo " TUGAS 3: Tampilkan Tanggal dengan date('d-F-Y') <br>";

echo "Tanggal sekarang: " . date('d-F-Y');
?>
