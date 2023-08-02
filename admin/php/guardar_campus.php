<?php


require 'conexion.php';



$nombre = $conn->real_escape_string($_POST['nombre']);
$ubicacion = $conn->real_escape_string($_POST['ubicacion']);



$sql = "INSERT INTO campus (nombre,ubicacion)
VALUES ('$nombre','$ubicacion')";


if ($conn->query($sql)) {
    $id = $conn->insert_id;

  
    header('Location: ../campus.php?mensaje=insertado');
} else {
    header('Location: ../campus.php?mensaje=error');
}
