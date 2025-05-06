<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo</title>
</head>
<body>
    <h1>
    <?php

function validarIdade($a){
    return $a;
}

$i = $_POST['i'];
$ca = validarIdade($i);

if ($ca < 18) {
    echo'Voçe é menor de idade';
   }else if ($ca >= 18 && $ca < 60) {
    echo'Voçe é Adulto';
   }else if ($ca >= 60) {
    echo'Voçe é Idoso';
   }

    ?>
    </h1>
</body>
</html>