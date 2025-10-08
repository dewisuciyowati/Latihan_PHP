<?php
// ======================
// SOAL 1
// ======================

echo "<h3>Soal 1</h3>";

// Array 2 dimensi berisi data 3 siswa: [Nama, Nilai Matematika, Nilai Bahasa]
$siswa = [
    ["Andi", 85, 90],
    ["Budi", 78, 88],
    ["Citra", 92, 95]
];

// Cetak nilai Bahasa dari siswa ke-2
echo "Nilai Bahasa dari siswa ke-2 ({$siswa[1][0]}) adalah: {$siswa[1][2]}<br><br>";

// Cetak semua data menggunakan tabel
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nama</th><th>Nilai Matematika</th><th>Nilai Bahasa</th></tr>";
for ($i = 0; $i < count($siswa); $i++) {
    echo "<tr>";
    echo "<td>{$siswa[$i][0]}</td>";
    echo "<td>{$siswa[$i][1]}</td>";
    echo "<td>{$siswa[$i][2]}</td>";
    echo "</tr>";
}
echo "</table><br>";


// ======================
// SOAL 2
// ======================

echo "<h3>Soal 2</h3>";

$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// Cetak nama buah pertama
echo "Nama buah pertama adalah: {$buah[0][0]}<br><br>";

// Hitung total nilai stok * harga untuk semua buah
$total = 0;

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nama Buah</th><th>Harga</th><th>Stok</th><th>Subtotal</th></tr>";
for ($i = 0; $i < count($buah); $i++) {
    $subtotal = $buah[$i][1] * $buah[$i][2];
    $total += $subtotal;
    echo "<tr>";
    echo "<td>{$buah[$i][0]}</td>";
    echo "<td>Rp " . number_format($buah[$i][1], 0, ',', '.') . "</td>";
    echo "<td>{$buah[$i][2]}</td>";
    echo "<td>Rp " . number_format($subtotal, 0, ',', '.') . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<br>Total nilai stok semua buah: Rp " . number_format($total, 0, ',', '.') . "<br><br>";


// ======================
// SOAL 3
// ======================

echo "<h3>Soal 3</h3>";

// Array asosiatif multidimensi berisi produk e-commerce
$produk = [
    ["nama" => "Laptop", "kategori" => "Elektronik", "harga" => 8500000, "rating" => 4.8],
    ["nama" => "Headphone", "kategori" => "Aksesoris", "harga" => 350000, "rating" => 4.5],
    ["nama" => "Smartphone", "kategori" => "Elektronik", "harga" => 9500000, "rating" => 4.9]
];

// Cetak semua data produk
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nama Produk</th><th>Kategori</th><th>Harga</th><th>Rating</th></tr>";
foreach ($produk as $p) {
    echo "<tr>";
    echo "<td>{$p['nama']}</td>";
    echo "<td>{$p['kategori']}</td>";
    echo "<td>Rp " . number_format($p['harga'], 0, ',', '.') . "</td>";
    echo "<td>{$p['rating']}</td>";
    echo "</tr>";
}
echo "</table><br>";

// Cari produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $p) {
    if ($p["harga"] > $tertinggi["harga"]) {
        $tertinggi = $p;
    }
}
echo "Produk dengan harga tertinggi adalah: <b>{$tertinggi["nama"]}</b> (Rp " . number_format($tertinggi["harga"], 0, ',', '.') . ")<br><br>";


// ======================
// SOAL 4
// ======================

echo "<h3>Soal 4</h3>";

// Array 2 dimensi 3x3 berisi angka acak (1–9)
$matriks = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9);
    }
}

// Cetak array dalam bentuk tabel
echo "Matriks 3x3:<br>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>{$matriks[$i][$j]}</td>";
    }
    echo "</tr>";
}
echo "</table><br>";

// Hitung jumlah total semua elemen
$total = 0;
foreach ($matriks as $baris) {
    foreach ($baris as $nilai) {
        $total += $nilai;
    }
}
echo "Jumlah total semua elemen: $total<br>";
?>
