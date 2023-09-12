<?php


require 'conexion.php';



$evento = $conn->real_escape_string($_POST['evento']);
$facultad = $conn->real_escape_string($_POST['facultad']);
$fecha = $conn->real_escape_string($_POST['fecha']);
$hora = $conn->real_escape_string($_POST['hora']);



$sql = "INSERT INTO lugar (FechaEvento,HoraEvento,Facultad,Evento)VALUES ('$fecha','$hora','$facultad','$evento')";


if ($conn->query($sql)) {
    $id = $conn->insert_id;

  
    header('Location: ../agenda.php?mensaje=insertado');
} else {
    header('Location: ../agenda.php?mensaje=error');
}
