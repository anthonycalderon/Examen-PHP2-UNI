<?php 
    $dbhost = "localhost"; 
    $dbuser = "root";
    $dbname = "prueba_ajax";
    $bases = $_POST["bases"];
    $conexion = mysql_connect($dbhost,$dbuser);
    mysql_select_db($dbname, $conexion);	
    $tablas = mysql_list_tables($dbname);
    echo "<h2>"."<br>".$_POST["bases"]."<br></h2>";
    $tabla = mysql_query("SELECT * FROM $bases");
    while ($registro = mysql_fetch_array($tabla)) {
		echo '<div class="box">'; 
		echo '<span>Numero de articulo: ' . $registro['articulo'] . '<br></span>'; 
		echo '<h3>Nombre: ' . $registro['nombre'] . '<br></h3>'; 
		echo '<p>Descripcion: ' . $registro['descripcion'] . '<br></p>'; 
		echo '<p>Precio: ' . $registro['precio'] . '€'.'<br></p>'; 
		echo '</div>';
    } 
    mysql_free_result($tablas); 
    mysql_close($conexion);
?>
