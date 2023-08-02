<?php


require 'conexion.php';
$id =$conn->real_escape_string($_POST['id']);


$sql= "SELECT * FROM campus WHERE id=$id LIMIT 1";
$resultado = $conn ->query($sql);


$rows= $resultado->num_rows;

$paciente=[];

if($rows >0){
$paciente = $resultado->fetch_array();


}


echo json_encode($paciente, JSON_UNESCAPED_UNICODE);





?>