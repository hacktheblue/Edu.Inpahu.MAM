<html>
<head>
<title>Registro_Grabado_Usuario</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#3399cc" text="#FFFFFF" link="#FFFFFF">
<table width="75%" border="0" align="center">
  <tr> 
    <td width="39%">&nbsp;</td>
    <td width="61%"><div align="center"><font size="6">Actualizacion de Datos 
        Usuarios</font></div></td>
  </tr>
</table>
<h4 align="center"><font color="#FFFF66" size="4" face="Arial, Helvetica, sans-serif"><em><A HREF="../PAGINAWE/index.html"> 
  <?php

// Abre la Conexion con la base de datos
require_once('../Conexion/Conexion.php');
    $sql="update usuarios set id_usu='$id_usu', nom_usu='$nom_usu', edad_usu='$edad_usu', sexo='$sexo', sede_usu='$sede_usu', area_usu='$area_usu', tel_usu='$tel_usu' where id_usu = '$id_usu$' ";
    $result = mysql_query($sql,$mamcon) or die(mysqli_error());
// Ejecutamos la sentencia SQL
// Con la instrucci�n mysql_db_query realizamos la consulta a la base de datos

echo "Registro modificado con �xito";
?>
  </A></em></font></h4>
<p align="center"><font color="#FFFFFF"><A HREF="../PAGINAWE/index.html">PAGINA PRINCIPAL</A></font></p>
<p>&nbsp;</p>
</body>
</html>
