<?php
$a=3;
if ($a=="0") {
echo "Angka Nol";
}
elseif ($a=="1") {
echo "Angka Satu";
}
elseif ($a=="2") {
echo "Angka Dua";
}
elseif ($a=="3") {
echo "Angka Tiga";
}
elseif ($a=="4") {
echo "Angka Empat";
}
elseif ($a=="5") {
echo "Angka Lima";
}
else
echo "Angka diluar jangkauan";
echo "<br />";
?>

<?php
$a=3;
switch ($a)
{
case 0 :
echo "Angka Nol";
break;
case 1 :
echo "Angka Satu";
break;
case 2 :
echo "Angka Dua";
break;
case 3 :
echo "Angka Tiga";
break;
case 4 :
echo "Angka Empat";
break;
case 5 :
echo "Angka Lima";
break;
default :
echo "Angka diluar jangkauan";
break;
echo "<br />";
}
?>   
<?php
$hari = 2;

switch ($hari) {
    case 1:
        echo "Senin";
        break;
    case 2:
        echo "Selasa";
        break;
    case 3:
        echo "Rabu";
        break;
    default:
        echo "Hari tidak dikenal";
        break;
}
?>
