<?php
$boodschappenlijstje = array("melk", "koffie", "peer", "cola");
$boodschappenTeller = 0;
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping-Statements-While-2</title>
</head>
<body>
<ul>

<?php while( isset($boodschappenlijstje[$boodschappenTeller])):?>

<li><?= $boodschappenlijstje[$boodschappenTeller]?></li>
<?php $boodschappenTeller++ ?>

<?php endwhile?> 

</ul> 
</body>
</html>