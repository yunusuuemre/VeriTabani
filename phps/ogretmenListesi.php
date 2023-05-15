<?php
include("siteTemelYapisi.php");
include("baglanti.php");
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

<table class="table table-bordered table-dark" style="margin-top: 30px; border-radius: 15px;">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">İsim</th>
            <th scope="col">Soyisim</th>
            <th scope="col">Telefon Numarası</th>
            <th scope="col">Ders</th>


          </tr>
        </thead>
        <tbody>
        

        <?php 

          $data = $conn->prepare("SELECT * FROM ogretmenler");
          $data->execute();
          if ($data->rowCount()) {
            foreach ($data as $ogr) {
              ?>
      <tr>
                <th scope="col"><?php echo $ogr['id']; ?></th>
                <th scope="col"><?php echo $ogr['ad']; ?></th>
                <th scope="col"><?php echo $ogr['soyad']; ?></th>
                <th scope="col"><?php echo $ogr['ogretmen_no']; ?></th>
                <th scope="col"><?php echo $ogr['ders']; ?></th>
              

            </tr>

            <?php  
            }
          }
        ?>
        </tbody>
      </table>

      <button class="btn btn-danger"><a href="ogretmenEkleme.php" style="color: black; font-size: x-large;">Öğretmen Ekle</a></button>
      <button class="btn btn-warning"><a href="ogretmenSilme.php" style="color: black; font-size: x-large;">Öğretmen Sil</a></button>
      <button class="btn btn-danger"><a href="ogretmenArama.php" style="color: black; font-size: x-large;">Öğretmen Ara</a></button>
      


</body>
</html>