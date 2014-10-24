<?php

   require_once('../Conexion/Conexion.php');
    $sql="select * from usuarios";
    $result = mysql_query($sql,$mamcon) or die(mysqli_error());
   
?>
<html>
<head>
<title>Grabaci�n de Datos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#3399cc">
<h1><div align="center">
    <table width="75%" border="0">
      <tr> 
        <td width="39%">&nbsp;</td>
        <center><td width="61%"><div align="center"><font color="#FFFFFF" size="6">Grabaci&oacute;n de 
            Usuarios</font></div></td></center>
      </tr>
    </table>
    <p>
      <?php

// Abre la Conexion con la base de datos|


// Ejecutamos la sentencia SQL
// Con la instrucci�n mysql_db_query realizamos la consulta a la base de datos

?>
    </p>
  </div>
</h1>
<LI> 
  <P align="center"><font color="#FFFFFF"><A HREF="../PAGINAWE/index.html">PAGINA PRINCIPAL</A></font></P>
  <p>&nbsp;</p>
</body>
</html>
