<?php
$waarden = array(8, 7, 8, 7, 3, 2, 1, 2, 4);
rsort($waarden);
$waardenUniek = array_unique($waarden);

?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays-Functies-3</title>
</head>
<body>
<p>
<?php
foreach($waardenUniek as $waarde)
{
    echo $waarde;
}
?>
</p>
</body>
</html>