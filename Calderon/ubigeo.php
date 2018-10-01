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