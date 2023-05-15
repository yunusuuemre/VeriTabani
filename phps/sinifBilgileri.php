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
            <th scope="col">Sınıf Adı</th>
            <th scope="col">Sınıf No</th>
            <th scope="col">Öğretmen</th>
 
          </tr>
        </thead>
        <tbody>
        

        <?php 

          $data = $conn->prepare("SELECT * FROM siniflar");
          $data->execute();
          if ($data->rowCount()) {
            foreach ($data as $ogr) {
                $sorgu= "SELECT ad FROM ogretmenler WHERE id=?";
                $sth = $conn->prepare($sorgu);
                $sth->execute(array($ogr['ogretmen_id']));
                $ogretmenAd = $sth->fetchColumn();
                
                $bolumSorgu = "SELECT ders FROM ogretmenler WHERE id=?";
                $sth = $conn->prepare($bolumSorgu);
                $sth->execute(array($ogr['ogretmen_id']));
                $bolum = $sth->fetchColumn();
                
              ?>
      <tr>
                <th scope="col"><?php echo $ogr['id']; ?></th>
                <th scope="col"><?php echo $ogr['sinif_adi']; ?></th>
                <th scope="col"><?php echo $ogr['sinif_no']; ?></th>
                <th scope="col"><?php echo $ogretmenAd; ?></th>

                

            </tr>

            <?php  
            }
          }
        ?>
        </tbody>
      </table>

</body>


</html>