<?php
$fruit = "kokosnoot";
$aantalKaraktersFruit = strlen($fruit);
$plaatsEersteO = strpos($fruit, "o");

$fruit2 = "ananas";
$aantalKaraktersFruit = strlen($fruit2);
$plaatsLaatsteA = strrpos($fruit2, "a");
$fruit2Upper = strtoupper($fruit2);

$lettertje = "e";
$cijfertje = 3;
$langsteWoord = "zandzeepsodemineralenwatersteenstralen";
$langstewoordZonderE = str_replace($lettertje, $cijfertje, $langsteWoord);
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String-extra-functions-1</title>
</head>
<body>
<p> Deel 1
<?=
"Het woord " . $fruit . " heeft " . $aantalKaraktersFruit . " letters en de eerste o komt voor op op plaats " . $plaatsEersteO ;
?>
</p>

<p> Deel 2
<?=
"Het woord " . $fruit2 . " heeft " . $aantalKaraktersFruit . " letters en de laatste a komt voor op plaats " . $plaatsLaatsteA . ". In hoofdletters ziet het woord er zo uit: " . $fruit2Upper;
?>
</p>

<p> Deel 3
<?=
"Het woord " . $langsteWoord . " ziet er zo uit: " . $langstewoordZonderE . " als je alle e's vervangt door drie's.";
?>
</p>
    
</body>
</html>