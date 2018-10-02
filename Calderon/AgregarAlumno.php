<?php
include_once('classBase.php');
$basesita=new bd_base;
$sql= "select * from alumnos"; //MUESTRA INFORMACION DE UNA VISTA
$datos=$basesita->consultar($sql);

if(isset($_GET['elegido'])){
    //solo para el caso de editar
    $sql2="select * from alumnos where id=" . $_GET['elegido'];
   $dato=$basesita->consultar($sql2);
    /*$curs=consultar($sql_3);
    $curso=$curs[0];*/
   $dat=$dato[0];
    $id=$dat['id'];
    $nom=$dat['nombre'];
    $ape=$dat['apellidos'];
    $fnac=$dat['fnac'];

}else{
    //para el caso de nuevo registro
    $id='';
    $nom='';
    $ape="";
    $fnac="";
}
	
?>

<html>
<head>
	<title>Agregar Alumno</title>
</head>

<body>
<a href="reporte.php">Regresar</a><br/><br/>
    <form name="X" method="post" action="AlumnoGrabar.php">
        <td><input name="txtId" type="text" id="txtId" size="10" maxlength="10" hidden="" value="<?=$id?>"></td>
	Nombre:<input type="text" name="txtNombre" value="<?= $nom?>"><br/>
	Apellidos:<input type="text" name="txtApellidos" value="<?= $ape?>"><br/>
        Fnac:<input type="date" name="txtFnac" value="<?= $fnac?>"><br/>
	
        <br/>
        
	
	<input type="submit" name="btnGrabar" value="Grabar">
</form>
      <table width="500" border="1">
    	<tr>
		<td>#</td>
		<td>Nombre</td>
                <td>Apellidos</td>
		<td>Fecha Nacimiento</td>
		<td>Editar</td>
                <td>Borrar</td>
             
                
	</tr>
 <?php foreach($datos as $y){ ?>	
	<tr>
		<td><?= $y['id'] ?></td>
		<td><?= $y['nombre']?></td>
                <td><?= $y['apellidos']?></td>
		<td><?= $y['fnac']?></td>
		
                <td border=""><a href="AgregarAlumno.php?elegido=<?= $y['id'] ?>">Editar</a></td>
                <td><a href="borrar.php?elegido=<?= $y['id'] ?>" onclick="return confirm('Seguro de borrar?')">Borrar</a></td>
	</tr>	
<?php } ?>
</table>
</body>

</html>
