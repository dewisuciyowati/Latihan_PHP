<?php
$nilai=90;
echo "CONTOH IF ELSE <br>";
if($nilai>80) { echo "Selamat Anda mendapat grade A <br>";}
else { echo "Maaf Anda belum dapat grade A <br>";};
echo "CONTOH SWITCH <br>";
switch($nilai) {
case 100 :echo "Nilai yang dipilih 100 <br>";
break;
case 90 :echo "Nilai yang dipilih 90 <br>";
break;
} echo "CONTOH FOR <br>";
for($i=1;$i<=5;$i++) 
{
echo "Looping FOR ke : ".$i."<br>";
}
echo "CONTOH WHILE <br>";
$j=1;
while($j<=5) {
echo "Looping While ke : ".$j."<br>";
$j++;
}
?>
<?php
$nilai = 90;

echo "CONTOH IF ELSE <br>";
if ($nilai >= 90) {
    echo "Selamat Anda mendapat grade A <br>";
} elseif ($nilai >= 75) {
    echo "Anda mendapat grade B <br>";
} elseif ($nilai >= 60) {
    echo "Anda mendapat grade C <br>";
} else {
    echo "Maaf, Anda belum lulus <br>";
}

echo "<br>CONTOH SWITCH <br>";
switch ($nilai) {
    case 100:
        echo "Nilai yang dipilih 100 <br>";
        break;
    case 90:
        echo "Nilai yang dipilih 90 <br>";
        break;
    case 80:
        echo "Nilai yang dipilih 80 <br>";
        break;
    default:
        echo "Nilai tidak terdaftar <br>";
        break;
}

echo "<br>CONTOH FOR <br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Looping FOR ke : " . $i . "<br>";
}

echo "<br>CONTOH WHILE <br>";
$j = 1;
while ($j <= 5) {
    echo "Looping WHILE ke : " . $j . "<br>";
    $j++;
}
?>
