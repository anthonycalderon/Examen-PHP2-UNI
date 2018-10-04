<?php

$p=$_POST['txtPromedio'];


	//editando alumno
	$sql="update alumnos set paterno='$b',materno='$c',nombre='$d',dni='$e',fnac='$f' where id=$a";
        
       


$cnx=mysqli_connect('localhost','root','','php2examen');
mysqli_query($cnx,"set names utf8");
$exito=mysqli_query($cnx,$sql);
if($exito==1){
	header('location: reporte.php');
}else{
	echo "Error al procesar !!";
	echo "<a href='reporte.php'>Regresar</a>";
}
?>