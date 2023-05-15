<?php
include("baglanti.php");
$ogrAd = @$_POST["ogrAd"];
$ogrSoyad = @$_POST["ogrSoyad"];
$ogrNo = @$_POST["ogrNo"];
$ogrSinif = @$_POST["ogrSinif"];
$ogrAdres = @$_POST["ogrAdres"];
$ogrTelefon = @$_POST["ogrTelefon"];
$veliAd = @$_POST["veliAd"];
$veliSoyad = @$_POST["veliSoyad"];
$veliTelefon= @$_POST["veliTelefon"];
$veliEposta = @$_POST["veliEposta"];
$veliMeslek= @$_POST["veliMeslek"];


$ekle = "INSERT INTO ogrenciler(ad, soyad,ogrenci_no,sinif,adres,telefon)
VALUES ('".$ogrAd."','".$ogrSoyad."','".$ogrNo."','".$ogrSinif."','".$ogrAdres."','".$ogrTelefon."');
";


$ekle2 = "INSERT INTO veliler(ad,soyad,telefon,e_posta,meslek,cocuk)
VALUES ('".$veliAd."','".$veliSoyad."','".$veliTelefon."','".$veliEposta."','".$veliMeslek."','".$ogrAd."');
";

$conn->query($ekle);
$conn->query($ekle2);

header("Location: ogrenciEkleme.php");

?>