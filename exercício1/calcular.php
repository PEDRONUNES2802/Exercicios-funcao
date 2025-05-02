<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$valor = $_POST ["valor1"];
$valor2 = $_POST ["valor2"];

function multiplicar ($valor,$valor2){

      return($valor*$valor2);

}
$valorFinal = multiplicar ($valor,$valor2);
  echo"o resultado da multilicação é: $valorFinal";


    ?>
</body>
</html>