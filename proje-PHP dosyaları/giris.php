<?php
include("baglanti.php");
session_start();
$ad = @$_POST["ad"];
$sifre = @$_POST["sifre"];
$sql = "SELECT * FROM yonetici WHERE yoneticiKullaniciAdi='$ad' AND yoneticiSifre='$sifre'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $_SESSION['ad'] = $ad;
    $sql2 = "INSERT INTO giris (girisTarih,yonetici_id) VALUES(NOW(), (SELECT dershane.yonetici.yoneticiId FROM yonetici WHERE(yoneticiKullaniciAdi = 'emre')))";
    $conn->query($sql2);
    // Gİriş YAPAN KULLANICI ADI YAZICAK GİRİS TABLOSUNDA VE GİRİŞ YAPILAN TARİHLE SAAT YAZACAK
    header("Location: AnaSayfa.php");
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
  </head>
<body style="background-color: gray;">
    
   
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Ana Sayfa<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Öğrenci İşlemleri
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Öğrencileri Listele</a>
            <a class="dropdown-item" href="#">Öğrenci Ekle</a>
            <a class="dropdown-item" href="#">Öğrenci Ara</a>
            <a class="dropdown-item" href="#">Öğrenci Düzenle</a>
            <a class="dropdown-item" href="#">Öğrenci Sil</a>
          </div>
       
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Öğretmen İşlemleri
            </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Öğretmenleri Listele</a>
            <a class="dropdown-item" href="#">Öğretmen Ekle</a>
            <a class="dropdown-item" href="#">Öğretmen Ara</a>
            <a class="dropdown-item" href="#">Öğretmen Düzenle</a>
            <a class="dropdown-item" href="#">Öğretmen Sil</a>
          </div>
  
          <li class="nav-item">
            <a class="nav-link " href="#">Veli Listesi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Para İşleri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Bugünkü Dersler</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link " style="color: red;" href="giris.php" >Giriş Yap</a>
          </li>
      </ul>
    </div>
  </nav>

  <form style="border-radius: 30px; width: 30%; display: inline-block; margin-top: 150px; margin-left: 30px; background-color: #289944;" action="giris.php" method="post">
    <div class="form-group" style="margin-top:5% ; margin-left:30px;">
      <label for="exampleInputEmail1"  style="font-size: xx-large;">Kullanıcı Adı</label>
      <input type="text" class="form-control"  id="exampleInputEmail1" name="ad" style="width: 90%;" aria-describedby="text">
    </div>
    <div class="form-group" style="margin-left: 30px; ">
      <label for="exampleInputPassword1" style="font-size: xx-large;">Şifre</label>
      <input type="password" class="form-control" name="sifre" style="width: 90%;" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-danger" style="margin-left: 30px; margin-bottom: 10px ; font-size: x-large; border-radius: 30px;">Giriş Yap</button>
  </form>


  <img src="logoKou.png" class="img-fluid" alt="logo" style="width: 20%; height: 20%; margin-bottom: 260px; margin-left: 100px;  ">


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>


</html>

