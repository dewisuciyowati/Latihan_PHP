<!DOCTYPE html>
<html>
<head>
    <title>Penjumlahan Matriks 3x3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #c8d7eeff;
            text-align: center;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            margin: 10px auto;
        }
        td {
            border: 1px solid #9fd7e0ff;
            padding: 10px;
            width: 40px;
            text-align: center;
        }
        input {
            width: 40px;
            text-align: center;
        }
        h2 {
            color: #3366cc;
        }
        .hasil td {
            background-color: #e0f7fa;
            font-weight: bold;
        }
        .btn {
            padding: 8px 16px;
            margin-top: 10px;
            border: none;
            background-color: #3366cc;
            color: white;
            border-radius: 6px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #264b9b;
        }
    </style>
</head>
<body>

<h2>Program Penjumlahan Matriks 3x3</h2>

<form method="post">
    <h3>Masukkan Nilai Matriks A</h3>
    <table>
        <?php
        // Membuat input matriks A (3x3)
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                echo "<td><input type='number' name='A[$i][$j]' required></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <h3>Masukkan Nilai Matriks B</h3>
    <table>
        <?php
        // Membuat input matriks B (3x3)
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                echo "<td><input type='number' name='B[$i][$j]' required></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <button type="submit" class="btn">Hitung Penjumlahan</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $A = $_POST['A'];
    $B = $_POST['B'];
    $C = array();

    // Proses penjumlahan menggunakan looping
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
        }
    }

    // Fungsi menampilkan matriks dalam tabel
    function tampilMatriks($M, $judul, $kelas = "") {
        echo "<h3>$judul</h3>";
        echo "<table class='$kelas'>";
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                echo "<td>".$M[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    // Tampilkan hasil
    echo "<hr>";
    tampilMatriks($A, "Matriks A");
    tampilMatriks($B, "Matriks B");
    tampilMatriks($C, "Hasil Penjumlahan (A + B)", "hasil");
}
?>

</body>
</html>
