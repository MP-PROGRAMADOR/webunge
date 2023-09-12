<?php


require 'conexion.php';

//  $directorio = "../images/noticias/";
// $archivo = $directorio . basename($_FILES["imgnoti"]["name"]);
// $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
// //Validar que es imagen
// $checarSiImagen = getimagesize($_FILES["imgnoti"]["tmp_name"]); 
// if ($checarSiImagen != false) {
//     //validar tamaño imagen
//     $size = $_FILES["imgnoti"]["size"];
//     if ($size > 500000) {
//         echo "La imagen pesa mas de 5000KB";
//     } else {
//         //validar tipo de imagen
//         if ($tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo == "png") {
//             // se validó el archivo correctamente
//             if (move_uploaded_file($_FILES["imgnoti"]["tmp_name"], $archivo)) {
//                 echo "El archivo se subio correctamente";
//             } else {
//                 echo "Hubo un error al subir el archivo";
//             }
//         } else {
//             echo "Solo se admiten archivos jpg/jpeg/png";
//         }
//     }
// } else {
//     echo "El documento no es una imagen";
// }




$titulo = $conn->real_escape_string($_POST['titulo']);
$descripcion = $conn->real_escape_string($_POST['descripcion']);




$sql = "INSERT INTO evento (titulo,descripcion) 
VALUES ('$titulo','$descripcion')";


if ($conn->query($sql)) {
    $id = $conn->insert_id;
    header('Location: ../eventos.php?mensaje=insertado');
} else {
    header('Location: ../eventos.php?mensaje=error');
}
