<?php
include("baglanti.php");
$ogrAd = @$_POST["ogrAd"];
$ogrSoyad = @$_POST["ogrSoyad"];
$ogrNo = @$_POST["ogrNo"];
$ders = @$_POST["ders"];



$ekle = "INSERT INTO ogretmenler(ad, soyad,ogretmen_no,ders)
VALUES ('".$ogrAd."','".$ogrSoyad."','".$ogrNo."','".$ders."')
";



$conn->query($ekle);

header("Location: ogretmenEkleme.php");

?>