<?php
$text = file_get_contents('text-file.txt');
$textChars = array();
$textLength = strlen($text);
$differentSymbols = array();
$counter = 0;

?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping-Statements-Foreach-1</title>
</head>
<body>
<p>
<?php
echo "De totale lengte van de array is " . $textLength . "<br/>";

$textChars = str_split($text);
rsort($textChars);
$reversedArray = array_reverse($textChars);

foreach($reversedArray as $Letter){
    echo $Letter . " ";
}

echo "<br/> Gessorteerd met een 'for' lus: <br/>";

for($i = 0; $i <= $textLength; $i++){
    //echo $reversedArray[$i] . " ";
    if(!in_array($reversedArray[$i], $differentSymbols))
    {
        array_push($differentSymbols, $reversedArray[$i]);
    }
}

foreach($differentSymbols as $Letter){
    echo $Letter . " ";
}
$amountOfDifferentSymbols = count($differentSymbols);

echo "<br/> Er zitten " . $amountOfDifferentSymbols . " verschillende symbolen in de array.";

for($i = 0; $i <= $textLength; $i++){
    //echo $reversedArray[$i] . " ";
    if(!in_array($reversedArray[$i], $differentSymbols))
    {
        array_push($differentSymbols, $reversedArray[$i]);
    }
}

echo "<br/> Het karakter R komt " . $counter . " keer voor in de array."

?>
</p>    
</body>
</html>