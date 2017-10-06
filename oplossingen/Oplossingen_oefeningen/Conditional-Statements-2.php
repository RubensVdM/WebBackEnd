<?php
$number = 5;
$day = "";
$dayupper = strtoupper($day);
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditional-Statements-2</title>
</head>
<body>
<p>
<?php
if($number == 1)
{
$day = "maandag";
}

if($number == 2)
{
$day = "dinsdag";
}

if($number == 3)
{
$day = "woensdag";
}

if($number == 4)
{
$day = "donderdag";
}

if($number == 5)
{
$day = "vrijdag";
}

if($number == 6)
{
$day = "zaterdag";
}

if($number == 7)
{
$day = "zondag";
}

echo "Het is vandaag " . $day . ", in hoofdletters is dit" . $dayupper;

?>
</p>
</body>
</html>