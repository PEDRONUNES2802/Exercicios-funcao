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

function parOuImpar ($valor){

      return($valor % 2);

}
$valorFinal = parOuImpar ($valor);
 
if ($valorFinal == 0){
echo"O número é par";

}

else if($valorFinal == 1 ){
    
    echo"o numer e impar";
}


    ?>
</body>
</html>