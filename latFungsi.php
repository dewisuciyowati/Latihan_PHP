<?php
$akar_kuadrat = sqrt(9);
echo "Akar kuadrat dari 9 adalah $akar_kuadrat";
// Akar kuadrat dari 9 adalah 3
?>
<?php
echo "12 pangkat 2 adalah: ".pow(12,2);
// 12 pangkat 2 adalah: 144
?>

<?php
//pembuatan fungsi
function perkalian($angka1, $angka2)
{
$a= $angka1;
$b= $angka2;
$hasil= $a*$b;
return $hasil;
}
//pemanggilan fungsi
$hasil=perkalian(4,5);
echo "Perkalian 4 x 5 adalah $hasil";
echo "<br />";
echo "Perkalian 7 x 2 adalah ".perkalian(7,2);
?>
<?php
//pemanggilan fungsi
echo "Luas Lingkaran dengan jari-jari 7cm = ".luas_lingkaran(7)."cm";
//pembuatan fungsi
function luas_lingkaran($jari2)
{
return M_PI*$jari2*$jari2;
}
?>