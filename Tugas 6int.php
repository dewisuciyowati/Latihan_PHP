<?php
// ==========================
// TUGAS ARRAY PHP
// ==========================
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Array PHP</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f6f8fa;
            color: #333;
            margin: 40px;
        }
        h2 {
            color: #0059ff;
            border-bottom: 2px solid #0059ff;
            padding-bottom: 5px;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 10px 0 25px 0;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px 15px;
            text-align: center;
        }
        th {
            background-color: #0059ff;
            color: white;
        }
        .result {
            background: #eaf2ff;
            padding: 10px;
            border-radius: 8px;
            width: fit-content;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<h1>Tugas Array PHP</h1>

<?php
// ======================
// SOAL 1
// ======================
echo "<h2>Soal 1: Data Siswa</h2>";

$siswa = [
    ["Andi", 85, 90],
    ["Budi", 78, 88],
    ["Citra", 92, 95]
];

// Cetak nilai Bahasa dari siswa ke-2
echo "<div class='result'>Nilai Bahasa dari siswa ke-2 ({$siswa[1][0]}) adalah: <b>{$siswa[1][2]}</b></div>";

// Cetak semua data menggunakan tabel
echo "<table>
<tr><th>Nama</th><th>Nilai Matematika</th><th>Nilai Bahasa</th></tr>";
foreach ($siswa as $row) {
    echo "<tr>";
    foreach ($row as $data) {
        echo "<td>$data</td>";
    }
    echo "</tr>";
}
echo "</table>";


// ======================
// SOAL 2
// ======================
echo "<h2>Soal 2: Data Buah</h2>";

$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// Cetak nama buah pertama
echo "<div class='result'>Nama buah pertama adalah: <b>{$buah[0][0]}</b></div>";

// Hitung total stok * harga
$total = 0;
echo "<table>
<tr><th>Nama Buah</th><th>Harga</th><th>Stok</th><th>Subtotal</th></tr>";
foreach ($buah as $b) {
    $subtotal = $b[1] * $b[2];
    $total += $subtotal;
    echo "<tr>
            <td>{$b[0]}</td>
            <td>Rp " . number_format($b[1], 0, ',', '.') . "</td>
            <td>{$b[2]}</td>
            <td>Rp " . number_format($subtotal, 0, ',', '.') . "</td>
          </tr>";
}
echo "</table>";
echo "<div class='result'><b>Total Nilai Stok Semua Buah:</b> Rp " . number_format($total, 0, ',', '.') . "</div>";


// ======================
// SOAL 3
// ======================
echo "<h2>Soal 3: Produk E-Commerce</h2>";

$produk = [
    ["nama" => "Laptop", "kategori" => "Elektronik", "harga" => 8500000, "rating" => 4.8],
    ["nama" => "Headphone", "kategori" => "Aksesoris", "harga" => 350000, "rating" => 4.5],
    ["nama" => "Smartphone", "kategori" => "Elektronik", "harga" => 9500000, "rating" => 4.9]
];

echo "<table>
<tr><th>Nama Produk</th><th>Kategori</th><th>Harga</th><th>Rating</th></tr>";
foreach ($produk as $p) {
    echo "<tr>
            <td>{$p['nama']}</td>
            <td>{$p['kategori']}</td>
            <td>Rp " . number_format($p['harga'], 0, ',', '.') . "</td>
            <td>{$p['rating']}</td>
          </tr>";
}
echo "</table>";

// Cari produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $p) {
    if ($p["harga"] > $tertinggi["harga"]) {
        $tertinggi = $p;
    }
}
echo "<div class='result'>Produk dengan harga tertinggi adalah: <b>{$tertinggi["nama"]}</b> (Rp " . number_format($tertinggi["harga"], 0, ',', '.') . ")</div>";


// ======================
// SOAL 4
// ======================
echo "<h2>Soal 4: Matriks 3x3</h2>";

// Buat matriks 3x3 berisi angka acak
$matriks = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9);
    }
}

// Cetak dalam bentuk tabel
echo "<table>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>{$matriks[$i][$j]}</td>";
    }
    echo "</tr>";
}
echo "</table>";

// Hitung total
$total = 0;
foreach ($matriks as $baris) {
    foreach ($baris as $nilai) {
        $total += $nilai;
    }
}
echo "<div class='result'>Jumlah total semua elemen dalam matriks: <b>$total</b></div>";
?>

</body>
</html>
