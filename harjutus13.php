<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 13</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <div class="container">
<?php
// harjutus 13
// Tristan Juapuu
// 18.06.2025
?>
  <h3>Pildi üleslaadimine (JPG/JPEG)</h3>

  <form action="" method="post" enctype="multipart/form-data" class="mb-4">
    <div class="mb-3">
      <input type="file" name="pilt" class="form-control" accept=".jpg,.jpeg">
    </div>
    <button type="submit" name="lae" class="btn btn-primary">Lae üles</button>
  </form>

  <?php
  $upload_dir = "uploads/";

  if (!file_exists($upload_dir)) {
    mkdir($upload_dir);
  }

  if (isset($_POST['lae']) && isset($_FILES['pilt'])) {
    $fail = $_FILES['pilt'];
    $nimi = basename($fail['name']);
    $laiend = strtolower(pathinfo($nimi, PATHINFO_EXTENSION));

    if (($laiend == "jpg" || $laiend == "jpeg") && $fail['type'] == "image/jpeg") {
      $sihtkoht = $upload_dir . time() . "_" . $nimi;
      if (move_uploaded_file($fail['tmp_name'], $sihtkoht)) {
        echo "<div class='alert alert-success'>Pilt üles laaditud!</div>";
      } else {
        echo "<div class='alert alert-danger'>Tõrge faili salvestamisel.</div>";
      }
    } else {
      echo "<div class='alert alert-warning'>Ainult JPG või JPEG failid on lubatud!</div>";
    }
  }

  $failid = glob($upload_dir . "*.{jpg,jpeg,JPG,JPEG}", GLOB_BRACE);
  if ($failid) {
    echo "<div class='row'>";
    foreach ($failid as $fail) {
      $failinimi = basename($fail);
      echo "
        <div class='col-md-3 mb-4'>
          <a href='$fail' target='_blank'>
            <img src='$fail' class='img-fluid border'>
          </a>
        </div>
      ";
    }
    echo "</div>";
  }
  ?>
</div>
</body>
</html>
