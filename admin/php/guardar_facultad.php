<?php


require 'conexion.php';



$nombre = $conn->real_escape_string($_POST['nombre']);
$direccion = $conn->real_escape_string($_POST['direccion']);



$sql = "INSERT INTO sede (Nombre,Direccion)
VALUES ('$nombre','$direccion')";


if ($conn->query($sql)) {
    $id = $conn->insert_id;

  
    header('Location: ../sede.php?mensaje=insertado');
} else {
    header('Location: ../sede.php?mensaje=error');
}
