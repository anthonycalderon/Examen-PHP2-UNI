<?php
include_once('classBase.php');
$basesita=new bd_Base;
$tipo=isset($_GET['tipo'])?$_GET['tipo']:'alum';
$alum= isset($_GET['alum'])?$_GET['alum']:'' ;
switch($tipo){
	case 'alum':
            $sql="select id,nombre from alumnos ";
		$funcion="onchange=\"curso();\"";
            break;
        case 'cur':
            $sql="select id,nombre from cursos ";
		$funcion="";
            break;

}
/*
$cnx=mysqli_connect('localhost','root','','php2examen');
$bolsa=mysqli_query($cnx,$sql);        */   
            $datos=$basesita->consultar($sql);
echo "<select name=cbo$tipo id=cbo$tipo $funcion >\n";
echo "<option value='0'>Selecciona</option>";
/*while($fila=mysqli_fetch_assoc($bolsa)){
	echo "<option value='".$fila['id']  ."'>" . $fila['nombre']. "</option>\n";
}*/
foreach ($datos as $y){
    echo "<option value='".$y['id']  ."'>" . $y['nombre']. "</option>\n";
}
echo "</select>\n";
/*
$alum=$_GET['alum'];
$sql="select id,nombre from alumnos ";
$sql2="select id,nombre from curso";
$funcion="onchange=\"curso();\"";
$cnx=mysqli_connect('localhost','root','','php2examen');
$bolsa=mysqli_query($cnx,$sql);
$bolsa2=mysqli_query($cnx,$sql);
echo "<select name=cboalum id=cboalum $funcion >\n";
echo "<option value='00'>Selecciona</option>";
while($fila=mysqli_fetch_assoc($bolsa)){
	echo "<option value='".$fila['id']  ."'>" . $fila['nombre']. "</option>\n";
}
echo "</select>\n";
echo $salida;
*/
?>