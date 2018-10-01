<?php
include_once('classBase.php');
$basesita=new bd_base;


	$nom='';
	$est='';
	
	


?>

<html>
<head>
	<title>Agregar Curso</title>
</head>

<body>

<form name="X" method="post" action="CursoGrabar.php">
	
        
	Nombre:<input type="text" name="txtNombre" value="<?= $nom?>"><br/>
	Estado:<input type="text" name="txtEstado" value="<?= $est?>"><br/>
       
	
        
	
	<input type="submit" name="btnGrabar" value="Grabar">
</form>
</body>

</html>
