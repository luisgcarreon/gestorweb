<?php
include('php_conexion.php');
$token = $_GET['token'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña Gestor escolar</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<?php include($path.'elementos/links_usuario.php');?>
    <style>
        /* Oculta el botón de enviar inicialmente */
        #submit-button {
            display: none;
        }
    </style>
</head>
<body>
	<?php include($path.'elementos/navbar_acceso.php');?>
    <div class="container text-center">
        <h1>Panel de clientes</h1>
        <h3>Recuperar contraseña</h3>
        <br>
        <br>
        <br>

        <div class="row">
            <center>
                <div class="card" style="width: 44rem;">
                    <div class="card-body">
                    <form action="recupera2.php" method="POST">
                        <h4 class="card-title text-center">Escriba una contraseña nueva</h4>
                        <br>
                        <input type="password" class="form-control" name="pass1" placeholder="Password nuevo">
                        <br>
                        <input type="password" class="form-control" name="pass2" placeholder="Repita password nuevo">
                        <br>
                        <div class="g-recaptcha" data-sitekey="6LfpyQQqAAAAAAb3iYT16iOSmx8KDQqzBEHaUOz9" data-callback="captchaVerified"></div>
                        <div id="submit-button">
                            <input type="hidden" name="token" value="<?php echo $token ?>">
                            <button class="btn btn-primary">Iniciar</button>
                        </div>
                    </form>
                    <br>
                    <br>
                </div>
            </center>
	    </div>            
	</div>
    <?php include($path.'elementos/footer.php');?>   
</body>
</html>
<script>
    // Función llamada cuando reCAPTCHA es verificado con éxito
    function captchaVerified() {
        document.getElementById('submit-button').style.display = 'block';
    }
</script>