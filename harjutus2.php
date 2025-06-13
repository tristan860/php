<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class=container>
        <h2>Arvutamine</h2>
<?php
// Harjutus 2
// Tristan Juapuu
// 13.06.2025
$x = 5;
$y = 10;
$liitm = $x + $y;
echo "Liitmine: $x + $y = $liitm <br>";
$lahut = $x - $y;
echo "Lahutamine: $x - $y = $lahut <br>";
$korru = $x * $y;
echo "Korrutamine: $x * $y = $korru <br>";
$jagam = $x / $y;
echo "Jagamine: $x / $y = $jagam <br>";
$jaak = $x % $y;
echo "Jääk: $x % $y = $jaak <br>";
?>
<h2>Teiseldamine</h2>
<form method="get">
    <input type="number" name="nr"><br>
    <input type="submit" value="arvuta" class="btn btn-primary"><br>
</form>
<?php
if (isset($_GET["nr"])) {
    $nr = $_GET["nr"];
    printf("%d mm on %0.2f cm<br>", $nr, $nr/10);
    printf("%d mm on %0.2f m<br>", $nr, $nr/1000);
}
?>

<h2>Kolmnurk</h2>
<form method="get">
    külg 1 <input type="number" name="a"><br>
    külg 2 <input type="number" name="b"><br>
    külg 3 <input type="number" name="c"><br>
    <input type="submit" value="arvuta" class="btn btn-primary"><br>
</form>

<?php
if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["c"])) {
    $a = (int)$_GET["a"];
    $b = (int)$_GET["b"];
    $c = (int)$_GET["c"];
        printf("kolmnurga ümbermõõt on %d cm <br>", $a + $b + $c);
        $s = ($a + $b + $c) / 2;
        $pindala = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
        printf("kolmnurga pindala on %d cm² <br>", round($pindala));
    }
?>



    </div>
  </body>