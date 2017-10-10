<?php
$getal = 33;

?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditional-Statements-If-Else-Elseif</title>
</head>
<body>
<p>
<?php
if($getal > 0 && $getal <= 10)
{
    $sentence = "Het getal ligt tussen de tientallen " . 0 . " en " . 10;
}
elseif($getal > 10 && $getal <= 20)
{
    $sentence = "Het getal ligt tussen de tientallen " . 10 . " en " . 20;
}
elseif($getal > 20 && $getal <= 30)
{
    $sentence = "Het getal ligt tussen de tientallen " . 20 . " en " . 30;
}
elseif($getal > 30 && $getal <= 40)
{
    $sentence = "Het getal ligt tussen de tientallen " . 30 . " en " . 40;
}
elseif($getal > 40 && $getal <= 50)
{
    $sentence = "Het getal ligt tussen de tientallen " . 40 . " en " . 50;
}
elseif($getal > 50 && $getal <= 60)
{
    $sentence = "Het getal ligt tussen de tientallen " . 50 . " en " . 60;
}
elseif($getal > 60 && $getal <= 70)
{
    $sentence = "Het getal ligt tussen de tientallen " . 60 . " en " . 70;
}
elseif($getal > 70 && $getal <= 80)
{
    $sentence = "Het getal ligt tussen de tientallen " . 70 . " en " . 80;
}
elseif($getal > 80 && $getal <= 90)
{
    $sentence = "Het getal ligt tussen de tientallen " . 80 . " en " . 90;
}
elseif($getal > 90 && $getal < 100)
{
    $sentence = "Het getal ligt tussen de tientallen " . 90 . " en " . 100;
}
else
{
    echo "U gaf een fout getal in";
}
$reversedSentence = strrev($sentence);
echo $sentence;
echo ". Omgekeerd zit deze zin er zo uit: " . $reversedSentence;
?>
</p>
</body>
</html>