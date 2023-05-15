<?php
/*
include("baglanti.php");

session_start();
$kullaniciAdi = @$_SESSION['ad'];

*/
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


<img src="logoKou.png" class="img-fluid" alt="logo" style="width: 20%; margin-left: 38%; margin-top:50px; display:inline-block">

 <br>
<h1 style="margin-top: 70px; margin-left:32%; font-weight: 800; font-family: fantasy; display: inline-block; color: #A94F20;"><?php echo "Giriş Başarılı, kullanıcı Adı : ".$kullaniciAdi ?></h1>


</body>


</html>