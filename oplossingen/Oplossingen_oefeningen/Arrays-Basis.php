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

$getallen = array(1, 2, 3, 4, 5);
$getallen2 = array(5, 4, 3, 2, 1);
$SumGetallen1En2 = array();
$lengthOfGetallen = count($getallen);

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
//var_dump($voertuigen);

$productOfGetallen = array_product($getallen);
echo "Dit is het product van alle getallen uit de array: " . $productOfGetallen;

echo ". Dit zijn de oneven getallen uit de array: ";
foreach($getallen as $number)
{
    if($number % 2 != 0)
    {
        echo $number;
    } 
}

for($i = 0; $i < $lengthOfGetallen; $i++)
{
    $SumGetallen1En2[$i] = $getallen[$i] + $getallen2[$i];
}
echo ". Dit is de som van de 2 arrays: ";
foreach($SumGetallen1En2 as $number)
{
    echo $number;
}
?>
</p>
</body>
</html>