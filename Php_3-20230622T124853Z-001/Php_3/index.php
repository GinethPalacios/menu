<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div>
            <h1> Menu de opciones en php </h1>
            <ul>
                <li>1. Datos del usuario</li>
                <li>2. Suma</li>
                <li>3. Resta</li>
                <li>4. Multiplicacion</li>
                <li>5. Division</li>
            </ul>

            <form action="" method="Post">
                <p> Ingresar la opcion que desee elegir</p>
                <input type="text" name="opt" id="opt">
                <button type="submit">Ingresar </button>
            </form>
        </div>
</body>
</html>
<?php
$opt=$_POST['opt'];

switch($opt){
    case'1':
      header ('Location:formulario.php');
    break;

    case'2':
        header ('Location:suma.php');
    break;  

    case'3':
        header ('Location:resta.php');
    break;

    case'4':
        header ('Location:multiplicacion.php');
    break;

    case'5':
        header ('Location:division.php');         
    break;
    default;
    echo "Porfavor seleccione una opcion valida";
}

echo "<h1>".$opt."</h1>";


