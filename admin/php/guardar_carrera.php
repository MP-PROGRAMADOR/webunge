<?php


require 'conexion.php';



$nombre = $conn->real_escape_string($_POST['nombre']);
$facultad = $conn->real_escape_string($_POST['facultad']);



$sql = "INSERT INTO carreras (Nombre,Facultad)VALUES ('$nombre','$facultad')";


if ($conn->query($sql)) {
    $id = $conn->insert_id;

  
    header('Location: ../carreras.php?mensaje=insertado');
} else {
    header('Location: ../carreras.php?mensaje=error');
}
