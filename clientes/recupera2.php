<?php
include('php_conexion.php');
$pass1      = $_POST['pass1'];
$pass2      = $_POST['pass2'];
$token      = $_POST['token'];

if ($pass1 == $pass2 && $pass1 != '') {
    $queryCl = mysqli_query($conexion, "SELECT * FROM usuarios WHERE token = '$token'");
    $rowCl   = mysqli_fetch_array($queryCl);
    $consecutivo = $rowCl['consecutivo'];
    //$pass    = password_hash($pass1, PASSWORD_DEFAULT);
    mysqli_query($conexion, "UPDATE usuarios SET contrasena = '$pass1', token = '' WHERE consecutivo = '$consecutivo'"); ?>
    <script>
        alert("Contraseña actualizada");
        window.location.href = "index.php";
    </script>
    <?php //echo "Contraseña actualizada";
}else{ ?>
    <script>
        alert("Las contraseñas no coinciden");
        window.location.href = "index.php";
    </script>
<?php } ?>