<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <form action="" method="Post">
        <input type="text" name="Nombre" id="" placeholder="Ingrese su nombre">
        <input type="text" name="Apellido" id="" placeholder="Ingrese su Apellido">
        <input type="text" name="Documento" id="" placeholder="Ingrese su Documento">
        <input type="text" name="Telefono" id="" placeholder="Ingrese su Telefono">
        <input type="text" name="Email" id="" placeholder="Ingrese su Email">
        <input type="text" name="Direccion" id="" placeholder="Ingrese su Direccion">
    <button type="submit"> Enviar </button>
    </form>

</body>
</html>

<?php
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Documento=$_POST['Documento'];
$Telefono=$_POST['Telefono'];
$Email=$_POST['Email'];
$Direccion=$_POST['Direccion'];

echo "<br><hr><table>
<tr>
<td>Nombre</td>
<td>Apellido</td>
<td>Documento</td>
<td>Telefono</td>
<td>Email</td>
<td>Direccion</td>
</tr>
<tr>
<td>".$Nombre."</td>
<td>".$Apellido."</td>
<td>".$Documento."</td>
<td>".$Telefono."</td>
<td>".$Email."</td>
<td>".$Direccion."</td>
</tr>
</table>";


