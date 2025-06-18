<?php
$page = $_GET['page'] ?? 'avaleht';
$lubatud = ['avaleht', 'tooted', 'admin', 'kontakt'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <div class="container">

<span class="fw-bold fs-5">Tristan.ee</span>
        <nav class="nav">
            <a class="nav-link <?php if($page=='avaleht') echo 'active'; ?>" href="?page=avaleht">Avaleht</a>
            <a class="nav-link <?php if($page=='kontakt') echo 'active'; ?>" href="?page=kontakt">Kontakt</a>
            <a class="nav-link <?php if($page=='admin') echo 'active'; ?>" href="?page=admin">Admin</a>
        </nav>
    </div>
</header>
<div class="container py-4">
    <?php
    if (!in_array($page, $lubatud)) {
        echo '<div class="alert alert-danger">Lehte ei eksisteeri!</div>';
    } else {
        include $page.'.php';
    }
    ?>
</div>
<footer class="bg-light text-center py-4 mt-5 border-top">
    <div class="container">
        <small>Tristan</small>
    </div>
</footer>
</body>
</html>