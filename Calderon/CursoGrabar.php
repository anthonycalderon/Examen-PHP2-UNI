<?php

include_once('classBase.php');
$basesita=new bd_base;

//$a=$_POST['txtId'];

$a=$_POST['txtNombre'];
$b=$_POST['txtEstado'];

$sql="insert into cursos(nombre,estado) 
	values('$a','$b')";

$exito=$basesita->ejecutar($sql);
echo $exito;

if($exito){
	header('location: reporte.php');
}else{
	echo "Error al procesar $sql !!";
	echo "<a href='reporte.php'>Regresar</a>";
}

?>