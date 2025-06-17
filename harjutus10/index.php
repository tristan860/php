<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <div class="container">
<?php
// harjutus 10
// Tristan Juapuu
// 17.06.2025
?>

<menu>
    <a href="index.php">Avaleht</a> |
    <a href="index.php?leht=portfoolio">Portfoolio</a> |
    <a href="index.php?leht=kaart">Kaart</a> |
    <a href="index.php?leht=kontakt">Kontakt</a>
</menu>

<?php
if(!empty($_GET['leht'])){
	$leht = htmlspecialchars($_GET['leht']);
	$lubatud = array('portfoolio','kaart','kontakt');
	$kontroll = in_array($leht, $lubatud);
	if($kontroll==true){
		include($leht.'.php');
	} else {
		echo 'Valitud lehte ei eksisteeri!';
	}
} else {


?>
<h2>Avaleht</h2>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo porro eos placeat sit tempora voluptatum? Asperiores dicta praesentium voluptas enim ipsa doloribus cupiditate modi. Quas exercitationem voluptates quod sunt provident.</p>

<?php


    }

?>