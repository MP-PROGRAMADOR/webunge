<?php 

require_once './conexion.php';

$id= $conn->real_escape_string($_POST['idCarrera']);
$nombre = $conn-> real_escape_string( $_POST['nombreCarrera']);
$facultad = $conn-> real_escape_string($_POST['facultadCarrera']) ;

$sql= "UPDATE  carreras SET Nombre='$nombre', Facultad='$facultad' WHERE Id=$id";


if($conn->query($sql)){
    $id=$conn->insert_id;

    header('Location: ../carreras.php?mensaje=actaulizado');
}else{
    header('Location: ../carreras.php?mensaje=error');
}

