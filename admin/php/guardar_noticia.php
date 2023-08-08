<?php


require 'conexion.php';

$directorio = "../images/noticias/";
$archivo = $directorio . basename($_FILES["imgnoti"]["name"]);
$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
//Validar que es imagen
$checarSiImagen = getimagesize($_FILES["imgnoti"]["tmp_name"]); 
if ($checarSiImagen != false) {
    //validar tamaño imagen
    $size = $_FILES["imgnoti"]["size"];
    if ($size > 500000) {
        echo "La imagen pesa mas de 5000KB";
    } else {
        //validar tipo de imagen
        if ($tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo == "png") {
            // se validó el archivo correctamente
            if (move_uploaded_file($_FILES["imgnoti"]["tmp_name"], $archivo)) {
                echo "El archivo se subio correctamente";
            } else {
                echo "Hubo un error al subir el archivo";
            }
        } else {
            echo "Solo se admiten archivos jpg/jpeg/png";
        }
    }
} else {
    echo "El documento no es una imagen";
}




$titulo = $conn->real_escape_string($_POST['titulo']);
$descripcion = $conn->real_escape_string($_POST['descripcion']);
$dia = $conn->real_escape_string($_POST['dia']);
$mes = $conn->real_escape_string($_POST['mes']);
$agno = $conn->real_escape_string($_POST['agno']);
$facultad = $conn->real_escape_string($_POST['facultad']);
$categoria = $conn->real_escape_string($_POST['categoria']);
$imgnoti = $_FILES["imgnoti"]["name"];



$sql = "INSERT INTO noticias (Titulo,Descripcion,Img,Dia,Mes,Agno,Categoria,Facultad) 
VALUES ('$titulo','$descripcion','$imgnoti','$dia','$mes','$agno','$categoria','$facultad')";


if ($conn->query($sql)) {
    $id = $conn->insert_id;


    header('Location: ../noticias.php?mensaje=insertado');
} else {
    header('Location: ../noticias.php?mensaje=error');
}
