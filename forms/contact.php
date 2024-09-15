<?php
$miCorreo = 'ventas@gestorescolar.com.mx';
$nombre = $_POST['name'];
$correo = $_POST['email'];
$subject = "Desde formulario -> ".$_POST['subject'];
$mensaje = $_POST['message'];

include ('empujarCorreo.php');
?>
