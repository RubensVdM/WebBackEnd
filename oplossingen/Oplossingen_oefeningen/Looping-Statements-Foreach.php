<?php
$text = file_get_contents('text-file.txt');
$textChars = array();
$textLength = strlen($text);
$differentSymbols = array();

?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping-Statements-Foreach</title>
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
echo "EINDE <br/>";

#for($i = 0; i <= $textLength; $i++){
    #echo $textChars[$i] . " ";
#}
array_unique($textChars);

foreach($textChars as $Letter){
    echo $Letter . " ";
}
echo "EINDE <br/>";



?>
</p>    
</body>
</html>