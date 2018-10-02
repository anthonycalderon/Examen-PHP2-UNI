<?php
include_once('classBase.php');
$basesita=new bd_base;
$sql= "select * from cursos"; //MUESTRA INFORMACION DE UNA VISTA
$datos=$basesita->consultar($sql);

	$nom='';
	$est='';
?>
<html>
<head>
	<title>Agregar Curso</title>
</head>

<body>
    <a href="reporte.php">Regresar</a><br/><br/>
<form name="X" method="post" action="CursoGrabar.php">
	
        
	Nombre:<input type="text" name="txtNombre" value="<?= $nom?>"><br/>
	Estado:<input type="text" name="txtEstado" value="<?= $est?>"><br/>
       
	<br/>
        
	
	<input type="submit" name="btnGrabar" value="Grabar">
</form>
    <table width="300" border="1">
    	<tr>
		<td>#</td>
		<td>Curso</td>
		<td>Estado</td>
		<td>Editar</td>
                <td>Borrar</td>
             
                
	</tr>
 <?php foreach($datos as $y){ ?>	
	<tr>
		<td><?= $y['id'] ?></td>
		<td><?= $y['nombre']?></td>
		<td><?= $y['estado']?></td>
		
                <td border=""><a href="formulario.php?elegido=<?= $y['id'] ?>">Editar</a></td>
                <td><a href="borrar.php?elegido=<?= $y['id'] ?>" onclick="return confirm('Seguro de borrar?')">Borrar</a></td>
	</tr>	
<?php } ?>
</table>
</body>

</html>
