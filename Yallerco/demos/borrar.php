<?php
include_once('classBase.php');
$basesita=new bd_base;

if(isset($_GET['elegido'])){
	$id=$_GET['elegido'];
	$sql="delete from alumnos where id=$id";
	$exito=$basesita->ejecutar($sql);
	if($exito){
		header('location: base_demo.php');
	}else{
		echo "Error al procesar !!";
		echo "<a href='base_demo.php'>Regresar</a>";
	}
}
?>