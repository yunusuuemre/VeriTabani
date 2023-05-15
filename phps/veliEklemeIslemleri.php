<?php
include("baglanti.php");
$veliAd= @$_POST["veliAd"];
$veliSoyad = @$_POST["veliSoyad"];
$veliTel= @$_POST["veliTelefon"];
$veliEposta= @$_POST["veliEposta"];
$veliMeslek=@$_POST["veliMeslek"];
$cocuk = @$_POST["cocuk"];


$ekle = "INSERT INTO veliler(ad, soyad,telefon,e_posta, meslek,cocuk)
VALUES ('".$veliAd."','".$veliSoyad."','".$veliTel."','".$veliEposta."','".$veliMeslek."','".$cocuk."');
";



$conn->query($ekle);

header("Location: veliEkle.php");

?>