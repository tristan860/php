<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <div class="container">
<?php
// harjutus 9
// Tristan Juapuu
// 17.06.2025
?>

    <h4 class="mt-4">Tervita kasutajat nimega</h4>
    <form method="get">
        <input type="text" name="nimi" class="form-control mb-2" placeholder="Sisesta oma nimi">
        <button class="btn btn-primary" type="submit">Tervita</button>
    </form>
    <?php
    if (!empty($_GET['nimi'])) {
        $nimi = strtolower($_GET['nimi']);
        $nimi = ucfirst($nimi);
        echo "<div class='alert alert-success'>Tere, $nimi!</div>";
    }
    ?>

    <h4 class="mt-4">Muuda tekst punktidega täidetuks</h4>
    <form method="get">
        <input type="text" name="tekst" class="form-control mb-2" placeholder="Sisesta sõna">
        <button class="btn btn-primary" type="submit">Muuda</button>
    </form>
    <?php
    if (!empty($_GET['tekst'])) {
        $sisend = strtoupper($_GET['tekst']);
        $tulemus = "";
        for ($i = 0; $i < strlen($sisend); $i++) {
            $tulemus .= $sisend[$i] . ".";
        }
        echo "<div class='alert alert-info'>$tulemus</div>";
    }
    ?>

    <h4 class="mt-4">Ropendamise asendus</h4>
    <form method="get">
        <input type="text" name="sonum" class="form-control mb-2" placeholder="Sisesta sõnum">
        <button class="btn btn-primary" type="submit">Kontrolli</button>
    </form>
    <?php
    if (!empty($_GET['sonum'])) {
        $sonum = $_GET['sonum'];
        $ropud = ['noob', 'idioot', 'loll', 'kurat'];
        $puhas = str_ireplace($ropud, '***', $sonum);
        echo "<div class='alert alert-warning'>$puhas</div>";
    }
    ?>

    <h4 class="mt-4">Genereeri kooli email</h4>
    <form method="get">
        <input type="text" name="eesnimi" class="form-control mb-2" placeholder="Sisesta eesnimi">
        <input type="text" name="perenimi" class="form-control mb-2" placeholder="Sisesta perenimi">
        <button class="btn btn-primary" type="submit">Loo email</button>
    </form>
    <?php
    function asendaTäpid($str) {
        $otsing = ['ä', 'ö', 'ü', 'õ', 'Ä', 'Ö', 'Ü', 'Õ'];
        $asendus = ['a', 'o', 'y', 'o', 'a', 'o', 'y', 'o'];
        return str_ireplace($otsing, $asendus, $str);
    }

    if (!empty($_GET['eesnimi']) && !empty($_GET['perenimi'])) {
        $ees = strtolower(asendaTäpid($_GET['eesnimi']));
        $per = strtolower(asendaTäpid($_GET['perenimi']));
        $email = $ees . "." . $per . "@hkhk.edu.ee";
        echo "<div class='alert alert-success'>Sinu email: $email</div>";
    }
    ?>
</div>
</body>
</html>