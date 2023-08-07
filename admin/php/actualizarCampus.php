<?php 

require_once './conexion.php';

$id = $_POST['idCam'];
$nombre = $_POST['nomCampus'];
$ubicacion = $_POST['ubicacionCamp'];

$q = "UPDATE campus SET Nombre = '$nombre', Ubicacion = '$ubicacion' WHERE Id = $id";
echo $resul = mysqli_query($conn, $q);
