<?php
include_once('classBase.php');
$basesita=new bd_base;

$a=$_POST['cboalum'];
$b=$_POST['cbocur'];


if($a==''){
	//alumno nuevo
	$sql="insert into promedios(id_alumno,id_curso) 
	values('$a','$b')";
}
$exito=$basesita->ejecutar($sql);
echo $exito;

if($exito){
	header('location: reporte.php');
}else{
	echo "Error al procesar $sql !!";
	echo "<a href='matricular.php'>Regresar</a>";
}

?>
