<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping-Statements-For</title>
</head>
<body>
<p>
<table>
<?php for($rij = 0; $rij < 10; $rij++):?>
    <tr>
        <?php for($kolom = 0; $kolom < 10; $kolom++):?>
            <td>kolom</td>
        <?php endfor;?>
    </tr>
<?php endfor;?>
</table>
</p>

<p>
<table>



</table>
</p>
</body>
</html>