<?php
$alum=$_GET['alum'];
$sql="select id,nombre from alumnos ";

$cnx=mysqli_connect('localhost','root','','php2examen');
$bolsa=mysqli_query($cnx,$sql);
echo "<select name=cboalum id=cboalum  >\n";
echo "<option value='00'>Selecciona</option>";
while($fila=mysqli_fetch_assoc($bolsa)){
	echo "<option value='".$fila['id']  ."'>" . $fila['nombre']. "</option>\n";
}
echo "</select>\n";
echo $salida;
