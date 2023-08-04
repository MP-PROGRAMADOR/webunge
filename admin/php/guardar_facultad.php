<?php


require 'conexion.php';



$nombre = $conn->real_escape_string($_POST['nombre']);
$sede = $conn->real_escape_string($_POST['sede']);
$campus=$conn->real_escape_string($_POST['campus']);

if($nombre!='' && $sede!='' && $campus!=''){

    $sql = "INSERT INTO facultad (Nombre,Sede,Campus)
VALUES ('$nombre','$sede','$campus')";


if ($conn->query($sql)) {
    $id = $conn->insert_id;

  
    header('Location: ../facultad.php?mensaje=insertado');
} else {
    header('Location: ../facultad.php?mensaje=error');
}


}else{
    header('Location: ../facultad.php?mensaje=campos');
}




