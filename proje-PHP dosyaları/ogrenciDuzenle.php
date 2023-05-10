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

    
       <h1>Düzenlemek istediğiniz öğrencinin bilgilerini giriniz</h1>

      <form action="">
        <table style="margin-left: 20px; margin-top: 20px;">
          <tr >
            <td><label class="form-label" style="font-size: x-large; display: inline-block; "> Öğrenci İsim  </label></td>
            <td colspan="7"><input type="text" required class="form-control" style="font-size: large; display: inline-block;" ></td>
          </tr>
          <tr>
            <td><label class="form-label" style="font-size: x-large; display: inline-block;">Öğrenci Soy Adı </label></td>
            <td colspan="7"><input type="text" required class="form-control" style="font-size: large; display: inline-block;"></td>
          </tr>
          <tr>
            <td><label class="form-label" style="font-size: x-large; display: inline-block;"> Öğrenci Sınıf </label></td>
            <td style="display: inline-block;"><input type="radio" required name="sinif" id="8" value="8"><span style="font-size: x-large;">8</span></td>
            <td style="display: inline-block;"><input type="radio" required name="sinif" id="9" value="9"><span style="font-size: x-large;">9</span></td>
            <td style="display: inline-block;"><input type="radio" required name="sinif" id="10" value="10"><span style="font-size: x-large;">10</span></td>
            <td style="display: inline-block;"><input type="radio" required name="sinif" id="11" value="11"><span style="font-size: x-large;">11</span></td>
            <td style="display: inline-block;"><input type="radio" required name="sinif" id="12" value="12"><span style="font-size: x-large;">12</span></td>
            <td style="display: inline-block;"><input type="radio" required name="sinif" id="Mezun" value="Mezun"><span style="font-size: x-large;">Mezun</span></td>
            <td style="display: inline-block;"><input type="radio" required name="sinif" id="Kpss" value="Kpss"><span style="font-size: x-large;">KPSS</span></td>
          </tr>
        </table>
        <button type="submit" class="btn btn-primary" style="margin-left: 40px; margin-top: 20px;">Düzenle</button>
        <button type="reset" class="btn btn-primary" style="margin-left: 20px; margin-top: 20px;">Temizle</button>
      
      </form>

      Öğrenci Bilgileri Yazılacak ve Düzenlemek için Ekle'deki ekranın aynısı gelecek (öncekini silip yeni olan bilgileri ekleyebilirsin)
      (veya olursa sadece istenen bilgileri girebilir)(girilen bilgilerin hepsi birden eşleşiyorsa yeni bilgileri o bilgiler üzerine yaz)


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>

<?php

include("baglanti.php");

?>