<?php


require 'conexion.php';



$nombre = $conn->real_escape_string($_POST['nombre']);


$sql = "INSERT INTO categoria (Nombre)
VALUES ('$nombre')";


if ($conn->query($sql)) {
    $id = $conn->insert_id;

  
    header('Location: ../categorias.php?mensaje=insertado');
} else {
    header('Location: ../categorias.php?mensaje=error');
}
