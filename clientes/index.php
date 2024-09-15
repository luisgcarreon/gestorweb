<?php
include('php_conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contratación Gestor escolar</title>
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
        <h3>Bienvenido</h3>
        <br>
        <br>
        <br>

        <div class="row">
            <center>
                <div class="card" style="width: 34rem;">
                    <div class="card-body">
                    <form action="valid.php" method="POST">
                        <h4 class="card-title text-center">Acceso</h4>
                        <input type="text" class="form-control" name="username" placeholder="Usuario">
                        <br>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <br>
                        <div class="g-recaptcha" data-sitekey="6LfpyQQqAAAAAAb3iYT16iOSmx8KDQqzBEHaUOz9" data-callback="captchaVerified"></div>
                        <div id="submit-button">
                            <button class="btn btn-primary">Iniciar</button>
                        </div>
                    </form>
                    <br>
                    <br>

                    <a href="#"  title="Olvide" data-toggle="modal" data-target="#recordar">Olvidé mi contraseña</a> ||
                    <a href="contratar.php">Usuario nuevo</a>
                </div>
            </center>

	    </div>            
	</div>
    <?php include($path.'elementos/footer.php');?>   

    <!-- modal recordar contraseña -->
    <div class="modal fade" id="recordar" tabindex="-1" aria-labelledby="recordarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="recordarLabel">Recuperar contraseña</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="">Le enviaremos el método de recuperación a su correo:</label>
                    <input type="text" class="form-control" name="email" placeholder="Correo electrónico">
                    <br>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="enviarcorreo">Enviar</button> 
                </div>
            </div>
        </div>
    </div>
    <!-- fin modal recordar contraseña -->

</body>
</html>
<script>
    // Función llamada cuando reCAPTCHA es verificado con éxito
    function captchaVerified() {
        document.getElementById('submit-button').style.display = 'block';
    }

    $('#enviarcorreo').click(function(){
        enviarCorreo();
    });

    function enviarCorreo(){
        var email = $('input[name="email"]').val();
        $.ajax({
            type: 'POST',
            url: 'enviarCorreo.php',
            data: {email: email},
            success: function(data){
                alert(data);
            }
        });
    }
</script>