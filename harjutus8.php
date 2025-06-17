<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <div class="container">
<?php
// harjutus 8
// Tristan Juapuu
// 17.06.2025
?>

    <h4 class="mt-4">Praegune kuupäev ja kellaaeg</h4>
    <?php
    date_default_timezone_set("Europe/Tallinn");
    $hetkeAeg = date("d.m.Y H:i");
    echo "<div class='alert alert-info'>$hetkeAeg</div>";
    ?>

    <h4 class="mt-4">Vanuse arvutamine</h4>
    <form method="get">
        <input type="number" name="synniaasta" class="form-control mb-2" placeholder="Sisesta sünniaasta (nt 2007)">
        <button class="btn btn-primary" type="submit">Arvuta vanus</button>
    </form>
    <?php
    if (!empty($_GET['synniaasta']) && is_numeric($_GET['synniaasta'])) {
        $aasta = (int)$_GET['synniaasta'];
        $praegu = (int)date("Y");
        $vanus = $praegu - $aasta;
        echo "<div class='alert alert-success'>Oled/saad sellel aastal $vanus aastaseks.</div>";
    }
    ?>

    <h4 class="mt-4">Kooliaasta lõpuni</h4>
    <?php
    $täna = new DateTime();
    $lopp = new DateTime(date("Y") . "-06-23");
    if ($täna > $lopp) {
        $lopp = new DateTime((date("Y")+1) . "-06-30");
    }
    $vahe = $täna->diff($lopp)->days;
    echo "<div class='alert alert-warning'>" . date("Y") . ". kooliaasta lõpuni on jäänud $vahe päeva.</div>";
    ?>

    <h4 class="mt-4">Aastaaeg ja pilt</h4>
    <?php
    $kuu = (int)date("n");

    if ($kuu >= 3 && $kuu <= 5) {
        echo '<img src="pildid/kevad.jpg" alt="icon" />';
    } elseif ($kuu >= 6 && $kuu <= 8) {
        echo '<img src="pildid/suvi.jpg" alt="icon" />';
    } elseif ($kuu >= 9 && $kuu <= 11) {
        echo '<img src="pildid/sügis.jpg" alt="icon" />';
    } else {
        echo '<img src="pildid/talv.jpg" alt="icon" />';
    }

    ?>
</div>
</body>
</html>
