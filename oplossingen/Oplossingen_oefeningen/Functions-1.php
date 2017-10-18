<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funtions-1</title>
</head>
<body>
<p>
<?php
function berekenSom($getal1, $getal2){

    $resultaat = 0;

    $resultaat = $getal1 + $getal2;

    return $resultaat;
}

function vermenigvuldig($getal1, $getal2){
    
        $resultaat = 0;
    
        $resultaat = $getal1 * $getal2;
    
        return $resultaat;
}

function isEven($getal1){
    
        $resultaat = 0;
    
        if($getal1 % 2 == 0){
            $resultaat = true;
        }
        elseif($getal1 % 2 != 0){
            $resultaat = false;
        }
        return $resultaat;
    }

$getal1 = 4;
$getal2 = 11;
echo berekenSom($getal1, $getal2) . "<br/>";
echo vermenigvuldig($getal1, $getal2) . "<br/>";

if (isEven(4) == true){
echo "De Boolean is true";
}

else{
    echo "De Boolean is false";
}
?>   
</p>
</body>
</html>