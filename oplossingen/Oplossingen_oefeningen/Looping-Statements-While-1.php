<?php
$i = 0;
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping-Statements-While-1</title>
</head>
<body>
<p>
<?php
while($x < 101)
{
    echo $x++ . ", ";
}
?>
</p>

<p>
<?php
while($i < 101)
{
    $i++;
    if($i % 3 == 0 && $i > 40 && $i < 80)
    {
        echo $i . ", ";
    }
}
?>
</p>
</body>
</html>