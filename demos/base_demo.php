<?php
include_once('classBase.php');
$basesita=new bd_Base;
$sql="select * from alumnos";
$datos=$basesita->consultar($sql);
//var_dump($datos);
?>
<a href="formulario.php">NuevoRegistro</a><br/>
<table border=1>
	<tr>
		<td>Id</td>
		<td>Paterno</td>
		<td>Materno</td>
		<td>Nombre</td>
		<td>Dni</td>
		<td>Fnac</td>
		<td>Editar</td>
		<td>Borrar</td>
	</tr>
<?php foreach($datos as $y){ ?>	
	<tr>
		<td><?= $y['id'] ?></td>
		<td><?php echo $y['paterno']?></td>
		<td><?= $y['materno']?></td>
		<td><?= $y['nombre']?></td>
		<td><?= $y['dni']?></td>
		<td><?= $y['fnac']?></td>
		<td><a href="formulario.php?elegido=<?= $y['id'] ?>">Editar</a></td>
		<td><a href="borrar.php?elegido=<?= $y['id'] ?>" onclick="return confirm('Seguro de borrar?')">Borrar</a></td>
	</tr>	
<?php } ?>	
</table>
