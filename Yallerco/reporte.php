<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once('classBase.php');
$basesita= new bd_Base;
$sql= "select * from vistareporte"; //MUESTRA INFORMACION DE UNA VISTA
$datos=$basesita->consultar($sql);

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="600" border="1">
  <tr>
    <td><a href="AgregarAlumno.php">Agregar Alumno</a> </td>
    <td><a href="AgregarCurso.php">Agregar Curso </a></td>
    <td><a href="matricular.php">Matricular</a></td>
    <td><a href="promedio_ingresar.php">Ingresar Notas </a></td>
  </tr>
</table>

<table width="600" border="1">
  <tr>
    <td>#</td>
    <td>Apellidos</td>
    <td>Nombre</td>
    <td>Curso</td>
    <td>Promedio</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Rojas</td>
    <td>Jaimito</td>
    <td>PHP 0 </td>
    <td>13.5</td>
  </tr>
</table>
<table width="600" border="1">
  <tr>
    <td>Generar PDF con relacion de alumnos y promedios </td>
  </tr>
</table>
<table width="600" border="1">
  <tr>
    <td>Mostrar el Histograma de Promedios </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
