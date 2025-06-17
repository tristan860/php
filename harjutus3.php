<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    
<?php 
// Harjutus 3
// Tristan Juapuu
// 13.06.2025
?>
<h2>Trapets</h2>
<form method="get">
    külg 1 <input type="number" name="a"><br>
    külg 2 <input type="number" name="b"><br>
    külg 3 <input type="number" name="h"><br>
    <input type="submit" value="arvuta" class="btn btn-primary"><br>
</form>
<?php
if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["h"])) {
    $a = (int)$_GET["a"];
    $b = (int)$_GET["b"];
    $h = (int)$_GET["h"];

    $s = ($a + $b) / 2 * $h;
    printf("Trapetsi Pindala on %.1f cm² <br>", ($s));
}
?>
<h2>Romb</h2>

<form method="get">
    külg 1 <input type="number" name="x"><br>
    <input type="submit" value="arvuta" class="btn btn-primary"><br>
<?php
if (isset($_GET["x"])) {
    $x = (int)$_GET["x"];
    $p = 4 * $x;
    printf("Rombi ümbermõõt on %.1f cm <br>", $p);
}
?>