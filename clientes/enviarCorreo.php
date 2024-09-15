<?php
include('php_conexion.php');
$miCorreo       = $_POST['email'];
$queryCl        = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$miCorreo'");
$rowCl          = mysqli_fetch_array($queryCl);
$nombreUsuario  = $rowCl['nombreUsuario'];
$token          = $rowCl['token'];

if ($nombreUsuario != '') {
    if ($token == '') {
        $token          = bin2hex(random_bytes(4)); // Genera un token de 8 caracteres
        mysqli_query($conexion, "UPDATE usuarios SET token = '$token' WHERE usuario = '$miCorreo'");
    }    
    $subject = 'Recuperación de contraseña';
    $mensaje = '<h4>¡Hola '.$nombreUsuario.'!</h4> 
    <p>Hemos recibido una solicitud para recuperar tu contraseña. Si no fuiste tú, ignora este mensaje.</p>  
    <p>Si fuiste tú, haz clic en el siguiente enlace para recuperar tu contraseña:<p> 
    <a href="https://www.gestorescolar.com.mx/clientes/recuperarContrasena.php?token='.$token.'">Recuperar contraseña</a>
    <br>
    <h4>Gestor escolar</h4>';
    
    $correo = 'controlescolarmexico@gmail.com';
    $nombre = 'Gestor escolar';
    include('../forms/empujarCorreo.php');
    echo "Se ha enviado un correo a tu dirección para recuperar tu contraseña";
}else{
   echo "El correo no está registrado";
}


?>