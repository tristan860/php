<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nimetus'])) {
    $rida = $_POST['pilt'].';'.$_POST['nimetus'].';'.$_POST['hind']."\n";
    file_put_contents('tooted.csv', $rida, FILE_APPEND);
    echo '<div class="alert alert-success">Toode lisatud!</div>';
}

if (isset($_GET['kustuta'])) {
    $tooted = file('tooted.csv');
    unset($tooted[$_GET['kustuta']]);
    file_put_contents('tooted.csv', implode('', $tooted));
    echo '<div class="alert alert-danger">Toode kustutatud!</div>';
}
?>

<h2>Admin</h2>
<form method="post" class="row g-2 mb-4">
    <div class="col-md-4"><input name="pilt" class="form-control" placeholder="Pildi nimi"></div>
    <div class="col-md-4"><input name="nimetus" class="form-control" placeholder="Nimetus"></div>
    <div class="col-md-2"><input name="hind" class="form-control" placeholder="Hind"></div>
    <div class="col-md-2"><button class="btn btn-success w-100">Lisa</button></div>
</form>

<table class="table">
    <thead><tr><th>Pilt</th><th>Nimi</th><th>Hind</th><th></th></tr></thead>
    <tbody>
<?php
$tooted = file('tooted.csv', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach ($tooted as $index => $rida) {
    list($pilt, $nimi, $hind) = explode(';', $rida);
    echo "<tr>
        <td><img src='img/$pilt' height='40'></td>
        <td>$nimi</td>
        <td>$hind</td>
        <td><a href='?page=admin&admin=jah&kustuta=$index' class='btn btn-sm btn-danger'>X</a></td>
    </tr>";
}
?>
    </tbody>
</table>
