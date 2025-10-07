<?php
// Matriks A
$A = array(
    array(1, 1, 1),
    array(2, 2, 2),
    array(3, 3, 3)
);

// Matriks B
$B = array(
    array(3, 3, 3),
    array(2, 2, 2),
    array(1, 1, 1)
);

// Inisialisasi matriks hasil
$C = array();

// Proses penjumlahan menggunakan looping
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Fungsi untuk menampilkan matriks dalam tabel
function tampilMatriks($M, $judul) {
    echo "<h3>$judul</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse; margin-bottom:10px;'>";
    for ($i = 0; $i < 3; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
            echo "<td style='text-align:center; width:40px;'>".$M[$i][$j]."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// Tampilkan hasil
echo "<h2>Penjumlahan Matriks 3x3</h2>";
tampilMatriks($A, "Matriks A");
tampilMatriks($B, "Matriks B");
tampilMatriks($C, "Hasil Matriks A + B");
?>
