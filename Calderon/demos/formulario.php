<?php
include_once('classBase.php');
$basesita=new bd_base;

if(isset($_GET['elegido'])){
	$id=$_GET['elegido'];
	
	$sql="select * from alumnos where id=$id";
	$alu=$basesita->consultar($sql);

	$a=$alu[0]['paterno'];
	$b=$alu[0]['materno'];
	$c=$alu[0]['nombre'];
	$d=$alu[0]['dni'];
	$e=$alu[0]['fnac'];
}else{
	$id='';
	$a='';
	$b='';
	$c='';
	$d='';
	$e='';
}

?>
<html>
<head>
	<title>PHP2</title>
</head>

<body>
<!-- disabled no deja viajar la caja de texto al PHP -->
<form name="X" method="post" action="alumno_grabar.php">
	Id:<input type="text" name="txtId" value="<?= $id?>" readonly><br/>
	Paterno:<input type="text" name="txtPaterno" value="<?= $a?>"><br/>
	Materno:<input type="text" name="txtMaterno" value="<?= $b?>"><br/>
	Nombre:<input type="text" name="txtNombre" value="<?= $c?>"><br/>
	DNI:<input type="text" name="txtDni" value="<?= $d?>"><br/>
	FNAC:<input type="date" name="txtFnac" value="<?= $e?>"><br/>
	<input type="submit" name="btnGrabar" value="Grabar">
</form>
</body>

</html>