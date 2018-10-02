<?php
include_once('classBase.php');
$basesita= new bd_Base;
if(isset($_GET['elegido'])){
	//solo para el caso de editar
	$sql="select * from vistareporte where idPromedio=" . $_GET['elegido'];
	$datos=$basesita->consultar($sql);
	$alum=$datos[0];
	$id=$alum['idPromedio'];
	$alu=$alum['idAlumno'];
	$cur=$alum['idCurso'];
	$n1=$alum['Nota1'];
	$n2=$alum['Nota2'];
	$n3=$alum['Nota3'];
	
	
}else{
	//para el caso de nuevo registro
	$id='';
	$alu='';
	$cur='';
	$n1=0;
	$n2=0;
	$n3=0;
	
}


$sql_1="select id,concat_ws(apellidos,nombre) alumno from alumnos";
$sql_2="select id,nombre from cursos";
$alumnos=$basesita->consultar($sql_1);
$cursos=$basesita->consultar($sql_2);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Matricula</title>
</head>

<body>
<form action="matricula_grabar.php" method="post">
  <table width="500" border="1" cellspacing="2" cellpadding="2">
    <tr>
      <td colspan="2">Matricula - Notas</td>
    </tr>


     <input type="text" hidden=""name="txtIdMat" value="<?= $id ?>" readonly>
    
    <tr>
      <td>Alumno</td>
      <td>
      <select name="cboAlumno">
      <option></option>
	  <?php foreach($alumnos as $aluc){ ?>    
	    <option value="<?= $aluc['id'] ?>" <?= ($aluc['id']==$alu?'selected':'') ?>><?= $aluc['alumno'] ?></option>
	  <?php } ?>
      </select>
      </td>
    </tr>
    <tr>
      <td>Curso</td>
      <td>
      <select name="cboCurso">
      <option></option>
      <?php foreach($cursos as $curs){ ?>    
	    <option value="<?= $curs['id'] ?>" <?= ($curs['id']==$cur?'selected':'') ?>><?= $curs['nombre'] ?></option>
	  <?php } ?>
      </select>
      </td>
    </tr>
    <tr>
      <td>N1</td>
      <td><input type="text" name="txtN1" value="<?= $n1 ?>"></td>
    </tr>
    <tr>
      <td>N2</td>
      <td><input type="text" name="txtN2" value="<?= $n2 ?>"></td>
    </tr>
    <tr>
      <td>N3</td>
      <td><input type="text" name="txtN3" value="<?= $n3 ?>"></td>
    </tr>
   
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Enviar"></td>
    </tr>
  </table>
</form>
</body>
</html>