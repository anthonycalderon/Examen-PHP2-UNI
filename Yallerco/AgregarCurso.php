<?php
include_once('classBase.php');
$basesita = new bd_base;

$sql = "select * from cursos"; //MUESTRA INFORMACION DE UNA VISTA
$datos = $basesita->consultar($sql);


$nom = '';
$est = '';
?>


<html>
    <head>
        <title>Agregar Curso</title>
    </head>

    <body>



        <table width="600" border="1">
            <tr>
                <th>Id</th>
                <th>Nombre Curso</th>
                <th>Estado</th>

            </tr>


<?php foreach ($datos as $y) { ?>	
                <tr>
                    <td><?= $y['id'] ?></td>
                    <td><?php echo $y['nombre'] ?></td>
                    <td><?= $y['estado'] ?></td>



                </tr>	
<?php } ?>	
        </table>
        
        <form name="X" method="post" action="CursoGrabar.php">


            Curso:<input type="text" name="txtCurso" value="<?= $nom ?>"><br/>
            Estado:<input type="text" name="txtEstado" value="<?= $est ?>"><br/>
            


            <input type="submit" name="btnGrabar" value="Grabar Curso">
        </form>
        <a href="reporte.php">Regresar a Reporte</a

    </body>

</html>
