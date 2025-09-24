<?php
// =================== 1. Login sederhana ===================
echo "<h2>1) Login Sederhana</h2>";

$username = "admin";
$password = "12345";

if ($username == "admin" && $password == "12345") {
    echo "Login berhasil! Selamat datang, $username.";
} else {
    echo "Login gagal! Username atau password salah.";
}

echo "<hr>";


// =================== 2. Cek kelulusan ===================
echo "<h2>2) Cek Kelulusan</h2>";

$nilai = 82;

if ($nilai >= 75) {
    echo "Selamat, Anda lulus. Nilai Anda: $nilai";
} else {
    echo "Maaf, Anda tidak lulus. Nilai Anda: $nilai";
}

echo "<hr>";


// =================== 3. Konversi angka ke hari ===================
echo "<h2>3) Konversi Angka ke Hari (Switch)</h2>";

$hari = 3;

switch ($hari) {
    case 1: echo "Senin"; break;
    case 2: echo "Selasa"; break;
    case 3: echo "Rabu"; break;
    case 4: echo "Kamis"; break;
    case 5: echo "Jumat"; break;
    case 6: echo "Sabtu"; break;
    case 7: echo "Minggu"; break;
    default: echo "Hari tidak valid"; break;
}

echo "<hr>";


// =================== 4. Diskon belanja ===================
echo "<h2>4) Diskon Belanja</h2>";

$totalBelanja = 250000;

if ($totalBelanja >= 500000) {
    echo "Total belanja Rp$totalBelanja → Diskon 20%!";
} elseif ($totalBelanja >= 200000) {
    echo "Total belanja Rp$totalBelanja → Diskon 10%!";
} else {
    echo "Total belanja Rp$totalBelanja → Belanja lagi untuk dapat diskon.";
}

echo "<hr>";


// =================== 5. Nested IF (login + role) ===================
echo "<h2>5) Nested IF (Login + Role)</h2>";

$user = "andi";
$role = "admin";

if ($user == "andi") {
    echo "Login berhasil.<br>";

    if ($role == "admin") {
        echo "Selamat datang Admin $user!";
    } else {
        echo "Selamat datang User $user!";
    }
} else {
    echo "Login gagal!";
}
?>
