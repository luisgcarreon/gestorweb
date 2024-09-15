<?php
// Mostrar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
//include('revisa.php');
include('php_conexion.php');
$path = "";
//$usuario = $_SESSION['usuario'];
$usuario = "usuario@gestorescolar.com.mx";
$_SESSION['usuario'] = $usuario;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Panel de cliente Gestor escolar</title>
    <?php include($path.'elementos/links_usuario.php');?>
    <!-- <script src="js/funciones.js"></script>  -->

</head>
<body>
    <?php include($path.'elementos/navbar_usuario.php');?>
    <div class="container">
        <h1>Panel de clientes</h1>
        <h4>Servicios</h4>
        <br>
        
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3>Servicios contratados</h3>                        
                        <hr>
                        
                       
            
                    </div>
                </div>
            </div>
        </div>
        <hr> <!-- Separador -->
 
    </div>
    
    
</body>
</html>

