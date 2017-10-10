<?php
$dieren1 = array("beer", "muis", "aap", "konijn", "kip", "geit", "slang", "vis", "mol", "stier");

$dieren2[] = "beer"; 
$dieren2[] = "muis"; 
$dieren2[] = "aap"; 
$dieren2[] = "konijn"; 
$dieren2[] = "kip"; 
$dieren2[] = "geit"; 
$dieren2[] = "slang"; 
$dieren2[] = "vis"; 
$dieren2[] = "mol"; 
$dieren2[] = "stier"; 

$voertuigen['landvoertuigen'] = array ("vespa", "fiets");
$voertuigen['watervoertuigen'] = array ("surfplank", "vlot", "schoener", "driemaster");
$voertuigen['luchtvoertuigen'] = array ("luchtballon", "helicopter", "B52");
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays-Basis</title>
</head>
<body>
<p>
<?php
var_dump($voertuigen);
?>
</p>
</body>
</html>