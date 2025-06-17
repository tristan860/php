<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <div class="container">
<?php
// harjutus 7
// Tristan Juapuu
// 17.06.2025
?>

    <h4 class="mt-4">Tervitus</h4>
    <?php
    function tervita() {
        return "Tere päiksekesekene!";
    }
    echo "<div class='alert alert-info'>" . tervita() . "</div>";
    ?>

    <h4 class="mt-4">Liitu uudiskirjaga</h4>
    <?php
    function uudiskiriForm() {
        echo '
        <form method="get">
            <input type="email" name="uudiskiri_email" class="form-control mb-2" placeholder="Sisesta oma email">
            <button class="btn btn-primary" type="submit">Liitu</button>
        </form>';
    }
    uudiskiriForm();

    if (!empty($_GET['uudiskiri_email'])) {
        echo "<div class='alert alert-success'>Aitäh, oled liitunud: " . htmlspecialchars($_GET['uudiskiri_email']) . "</div>";
    }
    ?>

    <h4 class="mt-4">Kasutajanimi ja email</h4>
    <form method="get">
        <input type="text" name="kasutajanimi" class="form-control mb-2" placeholder="Sisesta kasutajanimi">
        <button class="btn btn-primary" type="submit">Genereeri</button>
    </form>
    <?php
    function looEmailJaKood($nimi) {
        $nimi = strtolower(trim($nimi));
        $email = $nimi . "@hkhk.edu.ee";
        $kood = "";
        $tähed = "abcdefghijklmnopqrstuvwxyz";
        $numbrid = "0123456789";
        for ($i = 0; $i < 7; $i++) {
            $kood .= ($i % 2 == 0)
                ? $tähed[random_int(0, strlen($tähed) - 1)]
                : $numbrid[random_int(0, strlen($numbrid) - 1)];
        }
        return [$nimi, $email, $kood];
    }

    if (!empty($_GET['kasutajanimi'])) {
        list($nimi, $email, $kood) = looEmailJaKood($_GET['kasutajanimi']);
        echo "<div class='alert alert-info'>Nimi: $nimi<br>Email: $email<br>Kood: $kood</div>";
    }
    ?>

    <h4 class="mt-4">Arvude vahemik</h4>
    <form method="get">
        <input type="number" name="algus" class="form-control mb-2" placeholder="Algus">
        <input type="number" name="lopp" class="form-control mb-2" placeholder="Lõpp">
        <input type="number" name="samm" class="form-control mb-2" placeholder="Samm (nt 1)">
        <button class="btn btn-primary" type="submit">Genereeri arvud</button>
    </form>
    <?php
    function genArvud($algus, $lopp, $samm = 1) {
        $arvud = [];
        for ($i = $algus; $i <= $lopp; $i += $samm) {
            $arvud[] = $i;
        }
        return implode(", ", $arvud);
    }

    if (!empty($_GET['algus']) && !empty($_GET['lopp']) && !empty($_GET['samm'])) {
        $tulemus = genArvud((int)$_GET['algus'], (int)$_GET['lopp'], (int)$_GET['samm']);
        echo "<div class='alert alert-info'>$tulemus</div>";
    }
    ?>

    <h4 class="mt-4">Ristküliku pindala</h4>
    <form method="get">
        <input type="number" name="laius" class="form-control mb-2" placeholder="Laius">
        <input type="number" name="korgus" class="form-control mb-2" placeholder="Kõrgus">
        <button class="btn btn-primary" type="submit">Arvuta pindala</button>
    </form>
    <?php
    function pindala($a, $b) {
        return $a * $b;
    }

    if (!empty($_GET['laius']) && !empty($_GET['korgus'])) {
        $area = pindala((int)$_GET['laius'], (int)$_GET['korgus']);
        echo "<div class='alert alert-success'>Ristküliku pindala: $area</div>";
    }
    ?>

    <h4 class="mt-4">Isikukood</h4>
    <form method="get">
        <input type="text" name="isikukood" class="form-control mb-2" placeholder="Sisesta isikukood">
        <button class="btn btn-primary" type="submit">Kontrolli</button>
    </form>
    <?php
    function kontrolliIsikukoodi($kood) {
        if (strlen($kood) !== 11 || !is_numeric($kood)) {
            return "Vigane isikukood";
        }
        $suguNr = (int)substr($kood, 0, 1);
        $aasta = substr($kood, 1, 2);
        $kuu = substr($kood, 3, 2);
        $paev = substr($kood, 5, 2);
        $sajand = ($suguNr < 3) ? 1800 : (($suguNr < 5) ? 1900 : 2000);
        $sugu = ($suguNr % 2 == 0) ? "naine" : "mees";
        $synniaeg = "$paev.$kuu." . ($sajand + $aasta);
        return "Sugu: $sugu<br>Sünniaeg: $synniaeg";
    }

    if (!empty($_GET['isikukood'])) {
        $info = kontrolliIsikukoodi($_GET['isikukood']);
        echo "<div class='alert alert-info'>$info</div>";
    }
    ?>

    <h4 class="mt-4">Head mõtted</h4>
    <?php
    function heaMote() {
        $alus = ["Elu", "Sõprus", "Töö"];
        $oeldis = ["on", "võib olla", "muutub"];
        $sihitis = ["kingitus", "rõõm", "seiklus"];
        $lause = $alus[array_rand($alus)] . " " . $oeldis[array_rand($oeldis)] . " " . $sihitis[array_rand($sihitis)] . ".";
        return $lause;
    }

    echo "<div class='alert alert-secondary'>" . heaMote() . "</div>";
    ?>
</div>
</body>
</html>
