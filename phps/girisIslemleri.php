<?php
include("baglanti.php");
session_start();
$ad = @$_POST["ad"];
$sifre = @$_POST["sifre"];
$sql = "SELECT * FROM yonetici WHERE yoneticiKullaniciAdi='$ad' AND yoneticiSifre='$sifre'";
$result = $conn->query($sql);
$_SESSION['ad'] = $ad;
$sql2 = "INSERT INTO giris (girisTarih,yonetici_id) VALUES(NOW(), (SELECT dershane.yonetici.yoneticiId FROM yonetici WHERE(yoneticiKullaniciAdi = '$ad')))";
$conn->query($sql2);
// Gİriş YAPAN KULLANICI ADI YAZICAK GİRİS TABLOSUNDA VE GİRİŞ YAPILAN TARİHLE SAAT YAZACAK
header("Location: AnaSayfa.php");

?>