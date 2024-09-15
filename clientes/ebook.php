<?php
include('php_conexion.php');
$miCorreo       = $_POST['email'];
$ebook          = $_POST['ebook'];
$fecha          = date('Y-m-d H:i:s');
$token          = bin2hex(random_bytes(10)); // Genera un token de 8 caracteres

mysqli_query($conexion, "INSERT INTO prospectosEbook (email, ebook, token, fecha) VALUES ('$miCorreo', '$ebook', '$token', NOW())");


$subject = 'Envió de ebook';
$mensaje = '<h4>¡Hola!</h4> 
    <p>Muchas gracias por descargar nuestro podcast. Puede utilizar el siguiente del siguiente link:</p>  
    <a href="https://www.gestorescolar.com.mx/descargas.php?token='.$token.'">Descargar ebook gratuito</a>
    <br>
    <h4>Gestor escolar</h4>
    <b>Sistema de control escolar</b>';
    
$correo = 'controlescolarmexico@gmail.com';
$nombre = 'Gestor escolar';

include('../forms/empujarCorreo.php');
    
?>
<script>
    alert('Se ha enviado un correo a tu dirección con el link de descarga');
    window.location.href = '../index.html';
</script>