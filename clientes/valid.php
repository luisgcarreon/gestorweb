<?php
// Mostrar errores
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

session_start();
include_once('php_conexion.php'); 
$usuario = $_POST['username'];
$contra  = $_POST['password'];
//$_SESSION['username'] = $usuario;

$usu1 = strstr($usuario, "'");
$pas1 = strstr($contra, "'");
$usu2 = strstr($usuario, ")");
$pas2 = strstr($contra, ")");
if ($usu1==TRUE OR $usu2==TRUE OR $pas1==TRUE OR $pas2==TRUE) {
    $usuario=''; $contra='';
}
if ($usuario !='' AND $contra!='') { 
    
    $can=mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$contra'");
    if($dato=mysqli_fetch_array($can)){ 
        $_SESSION['username'] = $usuario;    
        ?>
        <script>
            window.location.href='panel.php';
        </script>
    <?php }else{ ?>
        <script>
            alert('Error en la autenticación');
            window.location.href='elementos/salir.php';
        </script>
<?php }
}else{?>
    <script>
        alert('Faltó usuario o contraseña!');
        window.location.href="index.php";
    </script>
<?php
}
