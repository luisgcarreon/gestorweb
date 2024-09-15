<?php
// error_reporting(E_ALL); 
// ini_set('display_errors', 1);
//include('clientes/php_conexion.php');
$token = $_GET['token'];
// $query = mysqli_query($conexion, "SELECT * FROM prospectosEbook WHERE token = '$token'");
// $row = mysqli_fetch_array($query);
// $row['token'];

//if ($row['token'] == $token) {
  //  mysqli_query($conexion, "UPDATE prospectosEbook SET estatus = 'DESCARGADO' WHERE token = '$token'");
    $nombre     = 'ebook1.pdf';
    $file       = 'koobe/'.$nombre;
    if (file_exists($file)) {
        // Obtén el tamaño del archivo
        $filesize = filesize($file);
        
        // Desactiva el almacenamiento en caché
        header("Cache-Control: private, max-age=0, no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
        
        // Configura los encabezados para la descarga
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Content-Length: ' . $filesize);
        
        // Limpia el búfer de salida y deshabilita la compresión
        if (ob_get_level()) ob_end_clean();
        //ini_set('zlib.output_compression', 0);
        
        // Abre el archivo en modo binario
        $handle = fopen($file, 'rb');
        
        // Lee y envía el archivo en bloques para manejar archivos grandes
        while (!feof($handle)) {
            $buffer = fread($handle, 1048576); // Lee 1MB a la vez
            echo $buffer;
            flush();
        }
        
        fclose($handle);
        exit;
    } else {
        // Si el archivo no existe, muestra un mensaje de error
        header("HTTP/1.0 404 Not Found");
        echo "El archivo PDF no se encontró.";
    }
?>


    