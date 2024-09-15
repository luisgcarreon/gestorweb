<?php
$miCorreo = 'ventas@gestorescolar.com.mx';
$nombre = $_POST['email'];
$correo = $_POST['email'];
$subject = "Solicita newsletter";
$mensaje = "El correo $correo solicita la newsletter";

include ('empujarCorreo.php');
?>
