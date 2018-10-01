<?php
include_once('classBase.php');
$basesita=new bd_base;

$id='';
	$ape='';
	$nom='';
	$fnac='';
	


?>

<html>
<head>
	<title>Agregar Alumno</title>
</head>

<body>

<form name="X" method="post" action="alumno_grabar.php">
	
        
	Apellidos:<input type="text" name="txtApellidos" value="<?= $ape?>"><br/>
	Nombre:<input type="text" name="txtNombre" value="<?= $nom?>"><br/>
	Fnac:<input type="text" name="txtFnac" value="<?= $fnac?>"><br/>
	
        
	
	<input type="submit" name="btnGrabar" value="Grabar">
</form>
</body>

</html>
