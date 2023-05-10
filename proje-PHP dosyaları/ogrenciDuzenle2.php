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
          <a class="nav-link" href="AnaSayfa.php">Ana Sayfa<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Öğrenci İşlemleri
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="ogrenciListesi.php">Öğrencileri Listele</a>
            <a class="dropdown-item" href="ogrenciEkle.php">Öğrenci Ekle</a>
            <a class="dropdown-item" href="ogrenciArama.php">Öğrenci Ara</a>
            <a class="dropdown-item" href="ogrenciDuzenle.php">Öğrenci Düzenle</a>
            <a class="dropdown-item" href="ogrenciSil.php">Öğrenci Sil</a>
          </div>
       
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Öğretmen İşlemleri
            </a>
          <div class="dropdown-menu">
          <a class="dropdown-item" href="ogretmenListesi.php">Öğretmenleri Listele</a>
            <a class="dropdown-item" href="ogretmenEkle.php">Öğretmen Ekle</a>
            <a class="dropdown-item" href="ogretmenArama.php">Öğretmen Ara</a>
            <a class="dropdown-item" href="ogretmenDuzenle.php">Öğretmen Düzenle</a>
            <a class="dropdown-item" href="ogretmenSil.php">Öğretmen Sil</a>
          </div>
          <li class="nav-item">
            <a class="nav-link " href="veliListesi.php">Veli Listesi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="paraIsleri.php">Para İşleri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="dersler.php">Bugünkü Dersler</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link " style="color: red;" href="giris.php" >Giriş Yap</a>
          </li>
      </ul>
    </div>
  </nav>

    
       
   



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>

<?php

include("baglanti.php");

?>