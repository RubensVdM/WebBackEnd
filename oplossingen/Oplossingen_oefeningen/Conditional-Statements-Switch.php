<?php
$getal = 3;
$day = "";

?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditional-Statements-Switch</title>
</head>
<body>
<p>
<?php
switch($getal)
{
    case 1:
    $day = "maandag";
    break;

    case 2:
    $day = "dinsdag";
    break;

    case 3:
    $day = "woensdag";
    break;

    case 4:
    $day = "donderdag";
    break;

    case 5:
    $day = "vrijdag";
    break;

    case 6:
    $day = "zaterdag";
    break;

    case 1:
    $day = "zondag";
    break;

    default:
    $day = "onbekende dag";
    break;
}
echo $day
?>
</p>    
</body>
</html>