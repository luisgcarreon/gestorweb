<?
include('../php/php_conexion.php');
echo "Start test...";
//$queryA = mysqli_query($conexion, "SELECT * FROM alumnos a INNER JOIN calificaciones b ON a.matricula=b.matricula WHERE (a.estatus='INSCRITO' OR a.estatus='REINSCRITO') AND b.periodo='2021-2022' ");
$queryA = mysqli_query($conexion, "SELECT * FROM alumnos WHERE (estatus='INSCRITO' OR estatus='REINSCRITO')");
while ($rowA=mysqli_fetch_array($queryA)) {
    $matricula = $rowA['matricula'];
    $materia   = $rowA['materia'];
    //$queryC    = mysqli_query($conexion, "SELECT * FROM calificaciones WHERE matricula = '$matricula' AND materia = '$materia' AND periodo='2021-2022' ");
    //$haydos    = mysqli_num_rows($queryC);
    //if ($haydos>1) {
    //    echo $matricula."/".$haydos."<br>";
    //}else{
        echo $matricula."ok -";
    //}
}
echo "End Test!";


?>