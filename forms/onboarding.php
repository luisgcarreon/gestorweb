<?php
$miCorreo = 'ventas@gestorescolar.com.mx';
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$subject = "Contrato nuevo -> ".$_POST['escuela'];

if ($_POST['plataforma'] == '1') { $plaforma = 'Modular Plan $ 2,125 al mes'; }
if ($_POST['plataforma'] == '2') { $plaforma = 'Smart Plan $ 3,350 al mes'; }
if ($_POST['plataforma'] == '3') { $plaforma = 'Plus Plan $ 6,000 al mes'; }

$mensaje = $_POST['nombre']." ha solicitado contratar un servicio de Gestor Escolar. <br><br>Nombre de la escuela: ".$_POST['escuela']."<br><br>Correo: ".$_POST['email']."<br><br>Teléfono: ".$_POST['telefono']."<br><br>Plataforma: ".$plaforma;

include ('empujarCorreo.php');
?>
