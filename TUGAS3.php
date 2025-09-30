
<?php
// ------------------------------------------
// 1. Perulangan dari 100 sampai 1000
// ------------------------------------------
echo "<h3>Perulangan dari 100 sampai 1000</h3>";
for ($i = 100; $i <= 1000; $i++) {
    echo $i . " ";
}

// ------------------------------------------
// 2. Kasus penggunaan perulangan & kontrol
// ------------------------------------------

// Contoh A: Membuat tabel perkalian 1 - 5
echo "<h3>Tabel Perkalian 1 - 5</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
for ($i = 1; $i <= 5; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// Contoh B: Menentukan grade beberapa nilai siswa
echo "<h3>Daftar Nilai Siswa & Grade</h3>";
$nilai_siswa = [95, 82, 70, 60, 45];

foreach ($nilai_siswa as $nilai) {
    if ($nilai >= 90) {
        $grade = "A";
    } elseif ($nilai >= 75) {
        $grade = "B";
    } elseif ($nilai >= 60) {
        $grade = "C";
    } else {
        $grade = "D";
    }
    echo "Nilai: $nilai → Grade: $grade <br>";
}
?>
