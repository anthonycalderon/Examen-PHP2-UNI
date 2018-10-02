<?php
include_once('classBase.php');
$basesita=new bd_base;
$a=$_POST['txtusuario'];
$b=$_POST['txtClave'];
$sql="select * from usuarios where nick='$a' and clave='$b'";
$datos=$basesita->consultar($sql);
if(count($datos)==1){
	header('location: reporte.php');
}else {
    header('location: login.html');
}
?>