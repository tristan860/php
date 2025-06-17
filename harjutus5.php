<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <div class="container">
<?php
// harjutus 5
// Tristan Juapuu
// 17.06.2025
echo "<h2>masiiv:</h2>";
$nimed = array('mari', 'kati', 'juhan', 'miku', 'uku' , 'miiu' , 'lote');
sort($nimed);

foreach ($nimed as $nimi) {
    echo $nimi . '<br>';
}

echo "<h2>esimesed 3 nime: <br></h2>";
echo $nimed[0] . '<br>';
echo $nimed[1] . '<br>'; 
echo $nimed[2] . '<br>';

echo "<h2>viimane nimi: <br></h2>";
echo end($nimed) . '<br>';

$suva = (rand(0, 6));
echo "<h2>suvaline nimi: <br></h2>";
echo $nimed[$suva] . '<br>';

echo "<h1>AUTOD<br></h1>";

$margid = array("Subaru","BMW","Acura","Mercedes-Benz","Lexus","GMC","Volvo","Toyota","Volkswagen","Volkswagen","GMC","Jeep","Saab","Hyundai","Subaru","Mercedes-Benz",
"Honda","Kia","Mercedes-Benz","Chevrolet","Chevrolet","Porsche","Buick","Dodge","GMC","Dodge","Nissan","Dodge","Jaguar","Ford","Honda","Toyota","Jeep",
"Kia","Buick","Chevrolet","Subaru","Chevrolet","Chevrolet","Pontiac","Maybach","Chevrolet","Plymouth","Dodge","Nissan","Porsche","Nissan","Mercedes-Benz",
"Suzuki","Nissan","Ford","Acura","Volkswagen","Lincoln","Mazda","BMW","Mercury","Mitsubishi","Ram","Audi","Kia","Pontiac","Toyota","Acura","Toyota","Toyota",
"Chevrolet","Oldsmobile","Acura","Pontiac","Lexus","Chevrolet","Cadillac","GMC","Jeep","Audi","Acura","Acura","Honda","Dodge","Hummer","Chevrolet","BMW",
"Honda","Lincoln","Hummer","Acura","Buick","BMW","Chevrolet","Cadillac","BMW","Pontiac","Audi","Hummer","Suzuki","Mitsubishi","Jeep","Buick","Ford");
$vinkoodid = array("1GKS1GKC8FR966658", "1FTEW1C87AK375821", "1G4GF5E30DF760067", "1FTEW1CW9AF114701", "WAUGGAFC8CN433989", "3G5DA03E83S704506", "4JGDA2EB0DA207570", 
"1FTEW1E88AK070552", "SAJWA0F77F8732763", "JHMFA3F21BS660717", "JTHBP5C29C5750730", "WA1LFAFP9DA963060", "3D7TT2CT6BG521976", "WVWN7EE961049", 
"2C3CA5CG3BH341234", "YV4952CFXC162587", "KNALN4D71F5805172", "JN1CV6EK7BM903692", "5FRYD3H84EB186765", "WAUL64B83N441878", "WDDGF4HBXCF845665", 
"WAUKF78E45A133973", "JN1BY0AR2AM022612", "WA1EY74L69D931520", "3GYFNGEYXBS290465", "1D7CW2GK4AS059336", "JN8AZ1FY5EW087447", "WAUBF78E57A343355", 
"SCFFBCCD8AG695133", "WBAWC73548E143482", "3GYFNGE38DS093883", "SCBCP73WC348460", "JN8AE2KPXE9353316", "2C3CDXDT2EH018229", "1G6AH5SX7D0325662", 
"WVWED7AJ7DW431402", "1FTKR1AD3AP316066", "WBAKF5C52CE612586", "1FTNX2A57AE16083", "WAUCFAFR1AA166821", "SCFFDAAM3EG486065", "1G4PR5SK5F4821043", 
"1C3CDFCB4ED858321", "1N6AD0CW8EN722090", "1NXBU4EE0AZ438077", "2T1BPRHE7FC131594", "JH4KB1637C451183", "1C4NJCBA7ED747024", "WAUHF68P86A736691", 
"3D7TT2HT1AG96429", "5GADX23L96D250838", "5FRYD3H25FB985936", "1G4GG5E30DF126304", "KNADH5A38B6072755", "WAUBFAFL1BA477979", "3C63DRL4CG674293", 
"1G6AR5SX0E0834815", "1NXBU4EE2AZ309838", "WAUKGBFB4AN797783", "JN1AJ0HP8AM801887", "WAUPL68E25A448831", "WA1C8BFP3FA535374", "WAUHE78P78A019744", 
"TRURD38J081400551", "1G4HP52K95428171", "5N1CR2MN1EC607241", "5UMDU93417L322773", "1G6AJ5S35F09585", "JN1CV6AP3BM234743", "SCBCR63W66C842051", 
"SCFFDCBD2AG509467", "WBA3C1C58CA664091", "1D7RW2BK6BS922303", "WAUDH98E67A546009", "2HNYB1H46CH683844", "3VW467AT4DM257275", "WDDGF4HB7CA515172", 
"2G61W5S88E9666199", "5GADV33W17D256205", "2C3CDXDT9CH683075", "2G4GU5X0E9989574", "WAUJC58E53A641651", "WDDEJ7KB3CA053774", "3D73M3CL6AG890452", 
"5GAER13D19J026924", "1G4HC5EM1BU329204", "3VWML7AJ6CM772736", "3C6TD4HT2CG011211", "JTDZN3EU2FJ023675", "JN8AZ1MU4CW041721", "KNAFX5A82F5991024", 
"1N6AA0CJ1D57470", "WAUEG98E76A780908", "WAUAF78E96A920706", "1GT01XEG8FZ268942", "1FTEW1CW4AF371278", "JN1AZ4EH8DM531691", "WAUEKAFBXAN294295", 
"1N6AA0EDXFN868772", "WBADW3C59DJ422810");

$markide_arv = count($margid);
$vinkoodide_arv = count($vinkoodid);

echo "<h2>autode arv:<br></h2>";
echo $markide_arv . '<br>';

echo "kas masiivid on võrtsed: <br>";
if ($markide_arv == $vinkoodide_arv) {
    echo "jah";
} else {
    echo "ei";
}

echo "<h2>toyotade arv:<br></h2>";
$toyota = 0;
foreach ($margid as $mark) {
    if ($mark == "Toyota") {
        $toyota++;
    }
}
echo $toyota . '<br>';

echo "<h2>audide arv:<br></h2>";
$audi = 0;
foreach ($margid as $mark2) {
    if ($mark2 == "Audi") {
        $audi++;
    }
}
echo $audi . '<br>';

echo "<h2>lühikesed vin koodid:<br></h2>";
foreach ($vinkoodid as $vin) {
    if (strlen($vin) < 17) {
        echo $vin . '<br>';
    }
}

echo "<h1>palkade keskmine:<br></h1>";
$palk = array(1220,1213,1295,1312,1298,1354,1296,1286,1292,1327,1369,1455);
$keskmine = array_sum($palk) / count($palk);
echo $keskmine . '<br>';

echo "<h1>Firmad<br></h1>";
$firmad = array("Kimia","Mynte","Voomm","Twiyo","Layo","Talane","Gigashots","Tagchat","Quaxo","Voonyx","Kwilith","Edgepulse","Eidel","Eadel","Jaloo","Oyope","Jamia");
sort($firmad);

foreach ($firmad as $firma) {
  echo $firma . '<br>';
}
?>
<h2>eemaldus</h2>
<form method="get">
    millist firmat soovite eemaldada <input type="text" name="eemaldus"><br>
    <input type="submit" value="Eemalda" class="btn btn-primary"><br>
</form>
<?php
if (isset($_GET["eemaldus"])) {
    $eemaldus = $_GET["eemaldus"];
    $sarnasus = array_search($eemaldus, $firmad);
    if ($sarnasus !== false) {
        unset($firmad[$sarnasus]);
    }
    foreach ($firmad as $firma) {
        echo $firma . '<br>';
    }
}

echo "<h1>Riigid<br></h1>";
$riigid = array("Indonesia","Canada","Kyrgyzstan","Germany","Philippines",
"Philippines","Canada","Philippines","South Sudan","Brazil",
"Democratic Republic of the Congo","Indonesia","Syria","Sweden",
"Philippines","Russia","China","Japan","Brazil","Sweden","Mexico","France",
"Kazakhstan","Cuba","Portugal","Czech Republic");

echo "kõige pikkema riigi nime märkide arv:<br>";
$max_length = 0;
foreach ($riigid as $riik) {
    if (strlen($riik) > $max_length) {
        $max_length = strlen($riik);
    }
}
echo $max_length . '<br>';

echo "<h1>Hiina Nimed<br></h1>";
$hiina = array("瀚聪","月松","雨萌","展博","雪丽","哲恒","慧妍","博裕","宸瑜","奕漳",
"思宏","伟菘","彦歆","睿杰","尹智","琪煜","惠茜","晓晴","志宸","博豪",
"璟雯","崇杉","俊誉","军卿","辰华","娅楠","志宸","欣妍","明美");
sort($hiina);
echo "esimene nimi: <br>";
echo $hiina[0] . '<br>';
echo "viimane nimi: <br>";
echo end($hiina) . '<br>';

echo "<h1>google:<br></h1>";

$google = array("Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett",
"Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin",
"Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins",
"Galer","Matevosian","DeBlase","Cubbin","Izzett","Ebi","Clohisey",
"Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes");

?>
<form method="get">
    millist nime soovid kontrollida: <input type="text" name="kontroll"><br>
    <input type="submit" value="kontroll" class="btn btn-primary"><br>
</form>
<?php
if (isset($_GET["kontroll"])) {
    $kontroll = $_GET["kontroll"];
    $sarnasus2 = array_search($kontroll, $google);
    if ($sarnasus2 !== false) {
        echo '<div class="alert alert-success" role="alert">nimi on olemas</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">nimi ei ole olemas</div>';
    }
}

echo "<h1>Pildid<br></h1>";

$pildid = array("pildid/prentice.jpg","pildid/freeland.jpg","pildid/peterus.jpg","pildid/devlin.jpg","pildid/gabriel.jpg","pildid/pete.jpg");

echo "<h2>kolmas pilt:<br></h2>";
echo '<img src="' . $pildid[2] . '" alt="Pilt" style="width:200px;height:200px;margin:10px;" class="rounded-circle"><br>';

echo "<h2>kõik pildid:<br></h2>";
foreach ($pildid as $pilt) {
    echo '<img src="' . $pilt . '" alt="Pilt" style="width:200px;height:200px;margin:10px;" class="rounded-circle">';
}
?>

  </body>
</html>
