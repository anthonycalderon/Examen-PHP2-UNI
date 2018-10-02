<?php

include_once('classBase.php');
$basesita=new bd_base;

//$a=$_POST['txtId'];
$i=$_POST['txtId'];
$a=$_POST['txtApellidos'];
$b=$_POST['txtNombre'];
$c=$_POST['txtFnac'];

if($i<>''){
    #actualizar
    $sql="update alumnos set apellidos='$a',nombre='$b',fnac='$c' where id=$i";
}else{
    #nuevo
   /* $sql="insert into notas (id_alumno,id_curso,n1,n2,n3,n4) values ($alu,$cur,$n1,$n2,$n3,$n4)";*/
$sql="insert into alumnos(apellidos,nombre,fnac)values('$a','$b','$c')";
    
}


$exito=$basesita->ejecutar($sql);
echo $exito;

if($exito){
	header('location: AgregarAlumno.php');
}else{
	echo "Error al procesar $sql !!";
	echo "<a href='AgregarAlumno.php'>Regresar</a>";
}
?>