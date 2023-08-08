<?php 

require_once './conexion.php';

$id = $_POST['idSede'];
$nombre = $_POST['nomSede'];
$direccion = $_POST['direccionSede'];

$queryUpdate = "UPDATE sede SET Nombre = '$nombre', Direccion = '$direccion' WHERE Id = '$id'";
echo $resul = mysqli_query($conn, $queryUpdate);
