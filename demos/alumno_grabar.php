<?php
include_once('classBase.php');
$basesita=new bd_base;

$a=$_POST['txtId'];
$b=$_POST['txtPaterno'];
$c=$_POST['txtMaterno'];
$d=$_POST['txtNombre'];
$e=$_POST['txtDni'];
$f=$_POST['txtFnac'];

if($a==''){
	//alumno nuevo
	$sql="insert into alumnos(paterno,materno,nombre,dni,fnac) 
	values('$b','$c','$d','$e','$f')";
}else{
	//editando alumno
	$sql="update alumnos set paterno='$b',materno='$c',nombre='$d',dni='$e',fnac='$f' where id=$a";
}

$exito=$basesita->ejecutar($sql);
echo $exito;

if($exito){
	header('location: base_demo.php');
}else{
	echo "Error al procesar $sql !!";
	echo "<a href='base_demo.php'>Regresar</a>";
}

?>