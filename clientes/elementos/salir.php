<?php
session_start();
include_once('../php_conexion.php'); 

unset($_SESSION['username']);
unset($_SESSION['profesor']);
session_destroy();
echo '<script>window.location.href="../index.php";</script>';
exit();

?>
