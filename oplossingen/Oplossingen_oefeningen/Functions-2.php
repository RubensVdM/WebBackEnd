<?php
$helden = array("Elon Musk", "Bart Peeters", "Jan Peeters", "Steven Spielberg", "E.T.");
$stringHtml = "<html>Multimediatechnologie kan je volgen aan de Karel de Grote Hogeschool.</html>"
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funtions-2</title>
</head>
<body>
<p>
<?php
function drukArrayAf($array){

    foreach($array as $partOfArray){
        echo $partOfArray . " /";
    }

    $afgedrukteArray =  "In de array zitten volgende elementen: " . $partOfArray;
    return $afgedrukteArray;
}

function validateHtmlTag($html){
    if(strpos($stringHtml, "<html>") == 0){
        echo "Deze string bevat een geldige html-tag";
    }
    return $isGeldig
}

drukArrayAf($helden);
?>
</p>
</body>
</html>