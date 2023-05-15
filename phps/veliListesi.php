<?php

include("baglanti.php");
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


<table class="table table-bordered table-dark" style="margin-top: 30px; border-radius: 15px;">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">İsim</th>
            <th scope="col">Soyisim</th>
            <th scope="col">Telefon</th>
            <th scope="col">E-Posta</th>
            <th scope="col">Meslek</th>
            <th scope="col">Çocuk</th>

          </tr>
        </thead>
        <tbody>
        

        <?php 

          $data = $conn->prepare("SELECT * FROM veliler");
          $data->execute();
          if ($data->rowCount()) {
            foreach ($data as $vli) {
              ?>
      <tr>
                <th scope="col"><?php echo $vli['id']; ?></th>
                <th scope="col"><?php echo $vli['ad']; ?></th>
                <th scope="col"><?php echo $vli['soyad']; ?></th>
                <th scope="col"><?php echo $vli['telefon']; ?></th>
                <th scope="col"><?php echo $vli['e_posta']; ?></th>
                <th scope="col"><?php echo $vli['meslek']; ?></th>
                <th scope="col"><?php echo $vli['cocuk']; ?></th>
               

            </tr>

            <?php  
            }
          }
        ?>
        </tbody>
      </table>


</body>


</html>