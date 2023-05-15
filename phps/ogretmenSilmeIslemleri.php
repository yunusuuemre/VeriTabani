<?php
include("baglanti.php");
include("siteTemelYapisi.php");
$ad = $_POST["ogrAd"];
$soyad = $_POST["ogrSoyad"];

$sqlSorgu = "DELETE FROM ogretmenler WHERE  ad = '".$ad."' AND soyad = '".$soyad."'";

$conn->query($sqlSorgu);

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

    <?PHP 
header("Location: ogretmenSilme.php");
?>


</body>


</html>