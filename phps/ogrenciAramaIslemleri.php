<?php
include("baglanti.php");
include("siteTemelYapisi.php");
$ogrAd = @$_POST["ogrAd"];
$ogrSoyad = @$_POST["ogrSoyad"];

$sql = "SELECT * FROM ogrenciler WHERE ad = :ad";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':ad', $ad);

$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($results as $row) {
    echo $row['ad'] . "<br>";
}






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

?>

</body>


</html>