<?php
$voornaam = "Ruben ";
$achternaam = "Van der Meirsch";
$volledigeNaam = $voornaam . $achternaam

?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Concatenate</title>
</head>
<body>
<p>
<?=
$volledigeNaam;
?>
</p>

<p>
<?=
"De lengte van het woord is " . strlen($volledigeNaam);
?>
</p>
    
</body>
</html>