<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo</title>
</head>
<body>
    <h1>
    A conversão resultou em <br> <br> 

    <?php

function converterParaCelsius($a){
    return ($a - 32) / 1.8;
}

$vf = $_POST['vf'];
$c = converterParaCelsius($vf);

echo $vf.' F° convertido em graus é '.$c.' C°';

    ?>
    </h1>
</body>
</html>