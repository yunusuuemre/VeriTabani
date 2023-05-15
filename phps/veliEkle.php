<?php

include("baglanti.php");

session_start();
$kullaniciAdi = @$_SESSION['ad'];


include("siteTemelYapisi.php");
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

    
<form action="veliEklemeIslemleri.php" method="post">
  <table style="margin-left: 20px; margin-top: 20px;">
<tr>
      <td><label class="form-label" style="font-size: x-large; display: inline-block;">Veli Adı</label></td>
      <td><input required type="text" class="form-control" name="veliAd" style="font-size: large; display: inline-block;"></td>
    </tr>
    <tr>
      <td><label class="form-label" style="font-size: x-large; display: inline-block;">Veli Soyadı</label></td>
      <td><input required type="text" class="form-control" name="veliSoyad" style="font-size: large; display: inline-block;"></td>
    </tr>
    <tr>
      <td><label class="form-label" style="font-size: x-large; display: inline-block;">Veli Telefon</label></td>
      <td><input required type="text" class="form-control" name="veliTelefon" style="font-size: large; display: inline-block;"></td>
    </tr>
    <tr>
      <td><label class="form-label" style="font-size: x-large; display: inline-block;">Veli E-Posta</label></td>
      <td><input required type="text" class="form-control" name="veliEposta" style="font-size: large; display: inline-block;"></td>
    </tr>
    <tr>
      <td><label class="form-label" style="font-size: x-large; display: inline-block;">Veli Meslek</label></td>
      <td><input required type="text" class="form-control" name="veliMeslek" style="font-size: large; display: inline-block;"></td>
    </tr>
    <tr>
      <td><label class="form-label" style="font-size: x-large; display: inline-block;">Cocuk</label></td>
      <td><input required type="text" class="form-control" name="cocuk" style="font-size: large; display: inline-block;"></td>
    </tr>
    </table>
    <button type="submit" class="btn btn-primary" style="margin-left: 40px; margin-top: 20px;">Ekle</button>
  <button type="reset" class="btn btn-primary" style="margin-left: 20px; margin-top: 20px;">Temizle</button>

</form>
</body>


</html>