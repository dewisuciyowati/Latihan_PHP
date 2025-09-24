<?php
$nilai = 85;

if ($nilai > 80) {
    echo "nilai lebih besar dari 80";
}
?>
<?php 
if (TRUE)
echo "<br />";
echo "Selamat datang Andi, di Politeknik Negeri Jember...";
?>
<?php
$nilai = 85;

if ($nilai >= 75) {
    echo "Selamat, Anda lulus!";
    echo "<br>";
    echo "Nilai Anda adalah $nilai";
}
?>
<?php
$nilai = 80;
$absensi = 90;

if ($nilai >= 75) {
    echo "Nilai memenuhi syarat kelulusan.<br>";
    echo "Nilai Anda: $nilai<br>";
}

if ($absensi >= 85) {
    echo "Absensi memenuhi syarat kelulusan.<br>";
    echo "Persentase Absensi: $absensi%<br>";
    echo "<br />";
}
?>
<?php
$nilai = 85;
$absensi = 92;

if ($nilai >= 75) {
    echo "Nilai memenuhi syarat kelulusan.<br>";

    if ($absensi >= 80) {
        echo "Absensi juga memenuhi syarat.<br>";
        echo "Selamat, Anda lulus!";
        echo "<br />";
    }
}
?>

<?php
$login = true;

if ($login): 
    echo "Selamat datang Andi<br>";
    echo "Anda berhasil login ke sistem";
    echo "<br />";
endif;
?>

<?php
$nama="Andi";
if ($nama=="Andi")
echo "Selamat Datang Andi...";
else
echo "Selamat Datang di Politeknik Negeri Jember";
echo "<br />";
?>
<?php
$nilai = 60;

if ($nilai >= 75)
    echo "Selamat, Anda lulus!";
else
    echo "Maaf, Anda belum lulus.";
?>
<?php
$nilai = 40;

if ($nilai >= 75) {
    echo "Selamat, Anda lulus.<br>";
    echo "Nilai Anda: $nilai";
} else {
    echo "Maaf, Anda belum lulus.<br>";
    echo "Nilai Anda: $nilai";
    echo "<br />";
}
?>

<?php
$nilai = 70;
?>

<?php if ($nilai >= 75): ?>
    <p>Selamat, Anda lulus!</p>
    <p>Nilai Anda: <?= $nilai ?></p>
<?php else: ?>
    <p>Maaf, Anda belum lulus.</p>
    <p>Nilai Anda: <?= $nilai ?></p>
<?php endif; ?>
