<?php
include("baglanti.php");
session_start();
$yonAd = @$_POST["yonAd"];
$yonSoyad=@$_POST["yonSoyad"];
$yonSifre = @$_POST["yonSifre"];
$kulAd = @$_POST["kulAd"];
$kulSifre = @$_POST["kulSifre"];
$yonEposta = @$_POST["yonEposta"];
$sql = " INSERT INTO yonetici (yoneticiAd,yoneticiSoyad,yoneticiKullaniciAdi,yoneticiSifre,yoneticiEposta)
VALUES('$yonAd','$yonSoyad','$kulAd','$kulSifre','$yonEposta');
"; 
$conn->query($sql);
header("Location: AnaSayfa.php");

?>