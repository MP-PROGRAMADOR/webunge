<?php 

require_once './conexion.php';

$id = $_POST['idCategoria'];
$nombre = $_POST['nombreCategoria'];



$sql= "UPDATE  categoria SET Nombre='$nombre' WHERE Id=$id";


if($conn->query($sql)){
    $id=$conn->insert_id;

    header('Location: ../categorias.php?mensaje=actaulizado');
}else{
    header('Location: ../categorias.php?mensaje=error');
}
