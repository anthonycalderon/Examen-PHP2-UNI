<?php
include_once('classBase.php');
$basesita=new bd_Base;
$sql="select * from alumnos";
$datos=$basesita->consultar($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="400" border="1">
    <tr>
      <td colspan="2">Matricular</td>
    </tr>
    <tr>
      <td>Alumno</td>
      <td><label>
        <select name="select">
          <option value="1">Alumno 1</option>
          <option value="2">Alumno 2</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Curso</td>
      <td><label>
        <select name="select2">
          <option value="1">Curso 1</option>
          <option value="2">Curso 2</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <input name="Grabar" type="submit" id="Grabar" value="Submit" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
$tipo=isset($_GET['tipo'])?$_GET['tipo']:'dpto';
//	a	?   b     :  c   Operador ternario
$dpto= isset($_GET['dpto'])?$_GET['dpto']:'' ;
$prov= isset($_GET['prov'])?$_GET['prov']:'';

switch($tipo){
	case 'dpto':
		$sql="select dpto as cod,nombre from ubigeo where dpto<>'00' and prov='00' and dist='00'";
		$funcion="onchange=\"provincias();\"";
		break;
	case 'prov':
		$sql="select prov as cod,nombre from ubigeo where dpto='$dpto' and prov<>'00' and dist='00'";
		$funcion="onchange=\"distritos();\"";
		break;
	case 'dist':
		$sql="select dist as cod,nombre from ubigeo where dpto='$dpto' and prov='$prov' and dist<>'00'";
		$funcion="";
		break;
}

$cnx=mysqli_connect('localhost','root','','ubigeo');
$bolsa=mysqli_query($cnx,$sql);


echo "<select name=cbo$tipo id=cbo$tipo $funcion >\n";
echo "<option value='00'>Selecciona</option>";
while($fila=mysqli_fetch_assoc($bolsa)){
	echo "<option value='".$fila['cod']  ."'>" . $fila['nombre']. "</option>\n";
}
echo "</select>\n";
?>