
<?php

	$id=$_GET['elegido'];
	$cnx=mysqli_connect('localhost','root','','php2examen');
	mysqli_query($cnx,"set names utf8");
	
        
        $sql = "SELECT  p.promedio
FROM alumnos a INNER JOIN cursos c 
ON a.id = c.id
INNER JOIN promedios p
ON p.id = a.id
where a.id = $id";
        
	$bolsa=mysqli_query($cnx,$sql);
	$alu=mysqli_fetch_assoc($bolsa);
	$a=$alu['promedio'];
            


?>
<html>
<head>
	<title>PHP2</title>
</head>

<body>
<!-- disabled no deja viajar la caja de texto al PHP -->
<form name="X" method="post" action="Promediograbar.php">
	Nota:<input type="text" name="txtPromedio" value="<?= $a?>" readonly><br/>
	
	<input type="submit" name="btnGrabar" value="Grabar">
</form>
</body>

</html>