<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <div class="container">
<?php
// harjutus 12
// Tristan Juapuu
// 18.06.2025
?>
 <h3>Sõiduaja arvutamine</h3>

  <form method="get" class="mb-3">
    <label class="form-label">Algusaeg (hh:mm):</label>
    <input type="text" name="algus" class="form-control mb-2" placeholder="nt 08:15">
    
    <label class="form-label">Lõpuaeg (hh:mm):</label>
    <input type="text" name="lopp" class="form-control mb-2" placeholder="nt 12:30">
    
    <button class="btn btn-primary" type="submit">Arvuta</button>
  </form>

  <?php
  if (!empty($_GET['algus']) && !empty($_GET['lopp'])) {
    $algus = $_GET['algus'];
    $lopp = $_GET['lopp'];

    if (strlen($algus) >= 5 && strlen($lopp) >= 5) {
      $algusSec = strtotime($algus);
      $loppSec = strtotime($lopp);

      if ($algusSec !== false && $loppSec !== false && $loppSec > $algusSec) {
        $vahe = $loppSec - $algusSec;
        $tunnid = floor($vahe / 3600);
        $minutid = floor(($vahe % 3600) / 60);

        echo "<div class='alert alert-success'>Sõiduaeg on $tunnid tundi ja $minutid minutit.</div>";
      } else {
        echo "<div class='alert alert-warning'>Kontrolli, et lõpuaeg on hilisem kui algusaeg.</div>";
      }
    } else {
      echo "<div class='alert alert-danger'>Palun sisesta mõlemad ajad korrektselt (vähemalt 5 sümbolit, nt 08:30).</div>";
    }
  }
  ?>

  <h3>Palkade võrdlus soo alusel</h3>

  <?php
  $fail = "tootajad.csv";

  if (file_exists($fail)) {
    $mehed = $naised = [];
    $mees_max = $naine_max = 0;

    if (($handle = fopen($fail, "r")) !== false) {
      while (($andmed = fgetcsv($handle, 1000, ";")) !== false) {
        if (count($andmed) === 3) {
          $nimi = $andmed[0];
          $sugu = strtolower(trim($andmed[1]));
          $palk = (int) $andmed[2];

          if ($sugu === 'm') {
            $mehed[] = $palk;
            if ($palk > $mees_max) $mees_max = $palk;
          } elseif ($sugu === 'n') {
            $naised[] = $palk;
            if ($palk > $naine_max) $naine_max = $palk;
          }
        }
      }
      fclose($handle);
    }

    function keskmine($arvud) {
      return count($arvud) ? array_sum($arvud) / count($arvud) : 0;
    }

    $meeste_keskmine = keskmine($mehed);
    $naiste_keskmine = keskmine($naised);

    echo "<div class='alert alert-info'>";
    echo "<strong>Meeste keskmine palk:</strong> " . number_format($meeste_keskmine, 2) . " €<br>";
    echo "<strong>Meeste suurim palk:</strong> $mees_max €<br>";
    echo "<strong>Naiste keskmine palk:</strong> " . number_format($naiste_keskmine, 2) . " €<br>";
    echo "<strong>Naiste suurim palk:</strong> $naine_max €<br><hr>";

    if ($meeste_keskmine > $naiste_keskmine) {
      echo "<strong>⚠ Võib esineda diskrimineerimine meeste kasuks.</strong>";
    } elseif ($naiste_keskmine > $meeste_keskmine) {
      echo "<strong>⚠ Võib esineda diskrimineerimine naiste kasuks.</strong>";
    } else {
      echo "<strong>✔ Palgad on võrdsed – diskrimineerimist ei tuvastatud.</strong>";
    }
    echo "</div>";
  } else {
    echo "<div class='alert alert-danger'>CSV fail <strong>$fail</strong> puudub!</div>";
  }
  ?>
</div>
</body>
</html>