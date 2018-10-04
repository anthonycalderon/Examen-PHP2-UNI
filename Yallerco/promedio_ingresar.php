<?php

$bolsa=null;
include_once('classBase.php');
$basesita = new bd_Base;
$sql = "SELECT p.id, a.nombre, a.apellidos, c.nombre, p.promedio
FROM alumnos a INNER JOIN cursos c 
ON a.id = c.id
INNER JOIN promedios p
ON p.id = a.id";

$datos = $basesita->consultar($sql);


?>



<table border=1>
	<tr>
		<td>Id</td>
		<td>Apellidos</td>
		<td>Nombres</td>
		<td>Curso</td>
		<td>Promedio</td>
                <td>Editar</td>
		
	</tr>
<?php foreach($datos as $y){ ?>	
	<tr>
		<td><?= $y['id'] ?></td>
		<td><?php echo $y['apellidos']?></td>
		<td><?= $y['nombre']?></td>
		<td><?= $y['nombre']?></td>  <!--nombre de curso -->
		<td><?= $y['promedio']?></td>
                <td><a href="guardarPromedio.php?elegido=<?= $y['id'] ?>">Editar</a></td>
               
		
	</tr>	
<?php } ?>	
</table>

<a href="guardarPromedio.php">Guardar Notas</a><br/>




