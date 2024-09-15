<?php
//session_start();
//include('../php_conexion.php');
$queryCg  	= mysqli_query($conexion, "SELECT * FROM config WHERE consecutivo = 1 ");
$rowCg 	  	= mysqli_fetch_array($queryCg);
$logoPk  	= $path.$rowCg['logoPeque'];
$color      = $rowCg['colorCabeza'];


//include('../elementos/lateral.php');
?>
<nav class = "navbar navbar-expand-lg navbar-dark" style="background-color: <?php echo $color ?>;"> 
<!-- <nav class="navbar navbar-dark bg-dark"> -->
<!-- <nav class = "navbar navbar-expand-lg navbar-dark bg-dark"> -->
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-start justify-content-center" href="#">
            <img src="<?php echo $logoPk ?>" width="130" style="margin-top: -45px;" >
        </a>
    
    
        <!-- <a class="navbar-brand" href="administracion/index.php">Administración</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item m-3">
                    <a class="nav-link active" aria-current="page" href=<?php echo $path."panel.php"?>>Inicio</a>
                </li>

                <li class="nav-item m-3">
                    <a class="nav-link active" aria-current="page" href=<?php echo $path."servicios.php"?>>Servicios</a>
                </li>

                <li class="nav-item m-3">
                    <a class="nav-link active" aria-current="page" href=<?php echo $path."pagos.php"?>>Pagos</a>
                </li>

                <li class="nav-item m-3">
                    <a class="nav-link active" aria-current="page" href=<?php echo $path."soporte.php"?>>Soporte</a>
                </li>

                <li class="nav-item m-3">
                    <a class="nav-link active" aria-current="page" href=<?php echo $path."elementos/salir.php"?>>Salir</a>
                </li>

            </ul>

            
            
        </div>
    </div>

    <?php
    //include('navAnexo.php');
    ?>

    
</nav>

