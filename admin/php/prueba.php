<?php
$dia = date("d");
$month = date("m");
$year = date("Y");

$fecha = date('d-m-Y');
$fechaEntera = strtotime($fecha);
echo "El dia es: " . $dia."</br>";
echo "El mes es: " . $month."</br>";
echo "El año es: " . $year."</br>";
echo "La fecha actual es: " . $fecha."</br>";
echo "*******************************************"."</br>";
 $anoForm = date('d', $fechaEntera);
 echo "El Año formateado es: ".$anoForm."</br>";
