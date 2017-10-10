<?php
$jaartal = "2026";

?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditional-Statements-If-Else-1</title>
</head>
<body>
<p>
<?php
if($jaartal % 4 == 0)
{
echo $jaartal . " is een schrikeljaar.";
}
else
{
    if($jaartal % 100 == 0)
    {
        echo $jaartal . " is geen schrikkeljaar";
    }
    else
    {
        if($jaartal % 400 == 0)
        {
        echo $jaartal . " is een schrikeljaar";
        }
        else
        {
        echo $jaartal . " is geen schrikeljaar";
        }
    }
}
?>
</p>
</body>
</html>