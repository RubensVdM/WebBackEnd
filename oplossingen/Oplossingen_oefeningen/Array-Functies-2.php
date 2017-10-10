<?php
$dieren = array("tijger", "panter", "python", "cobra", "olifant", "leeuw");
sort($dieren);
$lengthOfDieren = count($dieren);
$teZoekenDier = "kameel";

$zoogdieren = array("dolfijn", "hond", "everzwijn");
$dierenlijst = array_merge($zoogdieren, $dieren);

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array-Functies-2</title>
</head>
<body>
<p>
<?php
echo "De lengte van de array is " . $lengthOfDieren;

if(in_array($teZoekenDier, $dieren))
{
    echo ". Het dier '" . $teZoekenDier . "' is gevonden.";
}
else
{
    echo ". Het dier '" . $teZoekenDier . "' is niet gevonden.";
}
?>
</p>
</body>
</html>