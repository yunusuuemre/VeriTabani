<?php
/*
include("baglanti.php");
session_start();
$ad = @$_POST["ad"];
$sifre = @$_POST["sifre"];
$sql = "SELECT * FROM yonetici WHERE yoneticiKullaniciAdi='$ad' AND yoneticiSifre='$sifre'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $_SESSION['ad'] = $ad;
    $sql2 = "INSERT INTO giris (girisTarih,yonetici_id) VALUES(NOW(), (SELECT dershane.yonetici.yoneticiId FROM yonetici WHERE(yoneticiKullaniciAdi = '$ad')))";
    $conn->query($sql2);
    // Gİriş YAPAN KULLANICI ADI YAZICAK GİRİS TABLOSUNDA VE GİRİŞ YAPILAN TARİHLE SAAT YAZACAK
    header("Location: AnaSayfa.php");
}*/
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
  </head>
<body style="background-color: gray;">
    
   <h1 style="margin-top: 80px; margin-left:20px; font-family: 'Times New Roman', Times, serif;">Yeni Yönetici Bilgilerini Giriniz</h1>

  <form style="border-radius: 30px; width: 30%; display: inline-block; margin-top: 50px; margin-left: 30px; background-color: #289944;" action="yoneticiPanelIslemleri.php" method="post">
    <div class="form-group" style="margin-top:5% ; margin-left:30px;">
      <label for="exampleInputEmail1"  style="font-size: xx-large;">Yönetici Adı</label>
      <input type="text" class="form-control"  id="exampleInputEmail1" name="yonAd" style="width: 90%;" aria-describedby="text">
    </div>
    <div class="form-group" style="margin-top:5% ; margin-left:30px;">
      <label for="exampleInputEmail1"  style="font-size: xx-large;">Yönetici Soyadı</label>
      <input type="text" class="form-control"  id="exampleInputEmail1" name="yonSoyad" style="width: 90%;" aria-describedby="text">
    </div>
    <div class="form-group" style="margin-top:5% ; margin-left:30px;">
      <label for="exampleInputEmail1"  style="font-size: xx-large;">Kullanıcı Adı</label>
      <input type="text" class="form-control"  id="exampleInputEmail1" name="kulAd" style="width: 90%;" aria-describedby="text">
    </div>
    <div class="form-group" style="margin-left: 30px; ">
      <label for="exampleInputPassword1" style="font-size: xx-large;">Şifre</label>
      <input type="password" class="form-control" name="kulSifre" style="width: 90%;" id="exampleInputPassword1">
    </div>
    <div class="form-group" style="margin-top:5% ; margin-left:30px;">
      <label for="exampleInputEmail1"  style="font-size: xx-large;">Yönetici E-Posta</label>
      <input type="text" class="form-control"  id="exampleInputEmail1" name="yonEposta" style="width: 90%;" aria-describedby="text">
    </div>
    <button type="submit" class="btn btn-danger" style="margin-left: 30px; margin-bottom: 10px ; font-size: x-large; border-radius: 30px;">Yönetici Ekle</button>
  </form>


  <img src="logoKou.png" class="img-fluid" alt="logo" style="width: 20%; height: 20%; margin-bottom: 600px; margin-left: 100px;  ">


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>


</html>

