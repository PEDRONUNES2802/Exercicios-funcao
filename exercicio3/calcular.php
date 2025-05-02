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
$valor3 = $_POST ["valor3"];

echo "os valores são:<h2> $valor<br>$valor2<br>$valor3<br></h2>";


function MaiorNumero ($valor,$valor2,$valor3){

      return max($valor,$valor2,$valor3);

}
$valorFinal = MaiorNumero ($valor,$valor2,$valor3);
 
 echo"<h2>o maior numero é: $valorFinal</h2>";
 
    ?>

<form method='post' action='index.php'>
<input type='submit' name='botao' value='Voltar'><br> </br>
</body>
</html>