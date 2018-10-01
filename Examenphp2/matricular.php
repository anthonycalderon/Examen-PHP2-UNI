
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
	
	<script src="js/combos.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="" name="" method="post" action="guardar_matricula.php">
   <a href="#" onclick="matricula();">Cargar Datos Matricula</a>
  <table width="400" border="1">
    <tr>
      <td colspan="2">Matricular </td>
    </tr>
    <tr>
      <td>Alumno</td>
      <td><label>
              <div id="divalum">
				<select name="cboalum" id="cboalum"></select>
				</div>
      
      </label></td>
    </tr>
    <tr>
      <td>Curso</td>
      <td><label>
        
              <div id="divcur">
					<select name="cbocur" id="cbocur"></select>
				</div>
              
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
