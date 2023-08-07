<?php 

require_once './conexion.php';

$id = $_POST['idCarrera'];
$nombre = $_POST['nombreCarrera'];
$facultad = $_POST['facultadCarrera'];

$queryUpdate = "UPDATE carreras SET Nombre = '$nombre', Facultad = '$facultad' WHERE Id = '$id'";
echo $resul = mysqli_query($conn, $queryUpdate);
