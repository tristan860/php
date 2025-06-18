<?php
$bännerid = [
    ['img' => 'banner1.jpg', 'tekst' => 'osta 1 saad 1'],
    ['img' => 'banner2.jpg', 'tekst' => 'kõik rohelised'],
    ['img' => 'banner3.jpg', 'tekst' => 'suve allahindlus']
];
$valik = $bännerid[array_rand($bännerid)];
?>
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card">
            <img src="img/<?= $valik['img'] ?>" class="card-img-top" alt="Banner">
            <div class="card-body">
                <h5 class="card-title"><?= $valik['tekst'] ?></h5>
                <p class="card-text">The best classic dress is on sale at coro</p>
                <a href="#" class="btn btn-primary">Vaata lähemalt</a>
            </div>
        </div>
    </div>
</div>
<h2 class="text-center mb-4">Parimad pakkumised</h2>
<div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
<?php
$tooted = file('tooted.csv', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach ($tooted as $rida) {
    list($pilt, $nimetus, $hind) = explode(';', $rida);
    echo "<div class='col'><div class='card h-100 text-center p-2'>
        <img src='img/$pilt' class='card-img-top' alt='$nimetus'>
        <div class='card-body'>
            <h6 class='card-title'>$nimetus</h6>
            <p class='text-success fw-bold'>$hind €</p>
        </div>
    </div></div>";
}
?>
</div>
