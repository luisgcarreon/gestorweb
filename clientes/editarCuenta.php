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
        <h4>Editar cuenta de usuario</h4>
        <br>
        
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3>Datos de acceso</h3>                        
                        <hr>
                        
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="">Nombre:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nombre" value="">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-4">
                                <label for="">Nombre de la escuela:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="escuela" value="" required>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="">Correo electrónico:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="correo" value="" required>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-4">
                                <label for="">Contraseña:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="password" value="">
                                <a href="" class="btn btn-secondary">Cambiar contraseña</a>
                            </div>
                        </div>
            
                    </div>
                </div>
            </div>
        </div>
        <hr> <!-- Separador -->
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3>2. Información de la Institución Educativa</h3>                        
                        <hr>
                        
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="">Calle:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="calle" value="">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-4">
                                <label for="">Ciudad/Estado:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="estado" value="" required>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="">Código Postal:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="cp" value="" required>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-4">
                                <label for="">Teléfono:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="telefono" value="">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-4">
                                <label for="">Sitio web:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="web" value="">
                            </div>
                        </div>
            
                    </div>
                </div>
            </div>
        </div>
      

    </div>
    
    
</body>
</html>

