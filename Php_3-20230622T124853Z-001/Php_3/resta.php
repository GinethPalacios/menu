<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resta</title>
</head>
<body>
<form action="" method="Post">
    <p>Ingrese el primer dato</p>
        <input type="text" name="Numero1" id="" placeholder="Ingrese el primer dato">
        <p>Ingrese el segundo dato</p>
        <input type="text" name="Numero2" id="" placeholder="Ingrese el segundo dato">
    <button type="submit"> Calcular </button>
    </form> 
</body>
</html>
<?php
$Numero1=$_POST['Numero1'];
$Numero2=$_POST['Numero2'];
$Resultado =$Numero1 - $Numero2;

echo "El resultado de la resta es" .$Resultado;
?>