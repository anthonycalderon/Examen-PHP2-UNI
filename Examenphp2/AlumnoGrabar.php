<?php

include_once('classBase.php');
$basesita=new bd_base;

//$a=$_POST['txtId'];

$a=$_POST['txtApellidos'];
$b=$_POST['txtNombre'];
$c=$_POST['txtFnac'];



$sql="insert into alumnos(apellidos,nombre,fnac) 
	values('$a','$b','$c)";

$exito=$basesita->ejecutar($sql);
echo $exito;

if($exito){
	header('location: reporte.php');
}else{
	echo "Error al procesar $sql !!";
	echo "<a href='reporte.php'>Regresar</a>";
}