<?php 

require_once './conexion.php';

$id= $conn->real_escape_string($_POST['idFacultad']);
$nombre = $conn-> real_escape_string( $_POST['nombreFacultad']);
$sede = $conn-> real_escape_string($_POST['sedeFacultad']) ;
$campus = $conn-> real_escape_string($_POST['campusFacultad']) ;


$sql= "UPDATE  facultad SET Nombre='$nombre', Sede='$sede', Campus='$campus' WHERE Id=$id";


if($conn->query($sql)){
    $id=$conn->insert_id;

    header('Location: ../facultad.php?mensaje=actaulizado');
}else{
    header('Location: ../facultad.php?mensaje=error');
}

