<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
// Harjutus 4
// Tristan Juapuu
// 17.06.2025
?>
    <div class="container py-4">
        <h1 class="mb-4">PHP Ülesanded</h1>

        <form method="get" class="mb-4">
            <h4>Jagamine</h4>
            <input type="number" name="jagaja1" class="form-control mb-2" placeholder="Sisesta esimene arv">
            <input type="number" name="jagaja2" class="form-control mb-2" placeholder="Sisesta teine arv">
            <button class="btn btn-primary" type="submit">Arvuta jagamine</button>
        </form>
        <?php
        if (!empty($_GET['jagaja1']) && !empty($_GET['jagaja2'])) {
            $a = $_GET['jagaja1'];
            $b = $_GET['jagaja2'];
            if ($b != 0) {
                echo "<div class='alert alert-success'>Tulemus: $a / $b = " . ($a / $b) . "</div>";
            } else {
                echo "<div class='alert alert-warning'>Hoiatus: Nulliga jagamine ei ole lubatud!</div>";
            }
        }
        ?>

        <form method="get" class="mb-4">
            <h4>Vanuse võrdlus</h4>
            <input type="number" name="vanus1" class="form-control mb-2" placeholder="Esimese isiku vanus">
            <input type="number" name="vanus2" class="form-control mb-2" placeholder="Teise isiku vanus">
            <button class="btn btn-primary" type="submit">Võrdle</button>
        </form>
        <?php
        if (!empty($_GET['vanus1']) && !empty($_GET['vanus2'])) {
            $v1 = $_GET['vanus1'];
            $v2 = $_GET['vanus2'];
            if ($v1 > $v2) {
                echo "<div class='alert alert-info'>Esimene isik on vanem.</div>";
            } elseif ($v1 < $v2) {
                echo "<div class='alert alert-info'>Teine isik on vanem.</div>";
            } else {
                echo "<div class='alert alert-info'>Mõlemad on ühevanused.</div>";
            }
        }
        ?>

        <form method="get" class="mb-4">
            <h4>Ristkülik või ruut</h4>
            <input type="number" name="side1" class="form-control mb-2" placeholder="Külg 1">
            <input type="number" name="side2" class="form-control mb-2" placeholder="Külg 2">
            <button class="btn btn-primary" type="submit">Kontrolli kuju</button>
        </form>
        <?php
        if (!empty($_GET['side1']) && !empty($_GET['side2'])) {
            $s1 = $_GET['side1'];
            $s2 = $_GET['side2'];
            if ($s1 == $s2) {
                echo "<div class='alert alert-success'>Tegu on ruuduga.</div>";
            } else {
                echo "<div class='alert alert-success'>Tegu on ristkülikuga.</div>";
            }
        }
        ?>

        <form method="get" class="mb-4">
            <h4>Ristkülik või ruut (kuvana)</h4>
            <input type="number" name="s1" class="form-control mb-2" placeholder="Laius (px)">
            <input type="number" name="s2" class="form-control mb-2" placeholder="Kõrgus (px)">
            <button class="btn btn-primary" type="submit">Kuva kuju</button>
        </form>
        <?php
        if (!empty($_GET['s1']) && !empty($_GET['s2'])) {
            $w = $_GET['s1'];
            $h = $_GET['s2'];
            $kujund = ($w == $h) ? "ruut ($w x $h)" : "ristkülik ($w x $h)";
            echo "<div class='alert alert-info'>Tegu on kujundiga: $kujund</div>";
        }
        ?>

        <form method="get" class="mb-4">
            <h4>Juubeli kontroll</h4>
            <input type="number" name="synniaasta" class="form-control mb-2" placeholder="Sisesta sünniaasta">
            <button class="btn btn-primary" type="submit">Kontrolli</button>
        </form>
        <?php
        if (!empty($_GET['synniaasta'])) {
            $aasta = $_GET['synniaasta'];
            $praegu = date("Y");
            $vanus = $praegu - $aasta;
            if ($vanus > 0 && $vanus % 5 == 0) {
                echo "<div class='alert alert-success'>Palju õnne, sul on juubel ($vanus aastat)!</div>";
            } else {
                echo "<div class='alert alert-info'>Ei ole juubeliaasta. Vanus: $vanus</div>";
            }
        }
        ?>

        <form method="get" class="mb-4">
            <h4>KT hinnang</h4>
            <input type="text" name="punktid" class="form-control mb-2" placeholder="Sisesta punktid">
            <button class="btn btn-primary" type="submit">Hinda</button>
        </form>
        <?php
        if (isset($_GET['punktid']) && $_GET['punktid'] !== '') {
            $punktid = $_GET['punktid'];
            if (is_numeric($punktid)) {
                $p = (int)$punktid;
                switch (true) {
                    case ($p > 10):
                        echo "<div class='alert alert-success'>SUPER!</div>";
                        break;
                    case ($p >= 5 && $p <= 9):
                        echo "<div class='alert alert-info'>TEHTUD!</div>";
                        break;
                    case ($p < 5):
                        echo "<div class='alert alert-warning'>KASIN!</div>";
                        break;
                }
            } else {
                echo "<div class='alert alert-danger'>SISESTA OMA PUNKTID!</div>";
            }
        }
        ?>
    </div>
</body>
</html>
