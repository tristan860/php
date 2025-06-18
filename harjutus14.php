<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 14</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <div class="container">
<?php
// harjutus 14
// Tristan Juapuu
// 18.06.2025
?>
  <h2 class="mb-3">Suvaline pilt</h2>

  <?php
  $kaust = "harjutus14/";
  $failid = glob($kaust . "*.{jpg,jpeg,png}", GLOB_BRACE);

  if ($failid) {
    $suvaline = $failid[array_rand($failid)];
    echo "<div class='mb-4'>
            <img src='$suvaline' class='img-fluid border'>
          </div>";
  } else {
    echo "<div class='alert alert-warning'>Kataloogis pole ühtegi sobivat pilti!</div>";
  }
  ?>

  <h3 class="mb-3">Pisipildid (veerud)</h3>

  <?php
  $veerud = 3;

  if ($failid) {
    echo "<div class='row'>";
    foreach ($failid as $indeks => $fail) {
      echo "<div class='col-md-" . intval(12 / $veerud) . " mb-4'>
              <a href='$fail' target='_blank'>
                <img src='$fail' class='img-fluid border'>
              </a>
            </div>";
    }
    echo "</div>";
  }
  ?>
</div>
</body>
</html>
