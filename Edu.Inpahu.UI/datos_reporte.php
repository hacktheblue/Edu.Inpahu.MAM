<html>
<head>
<title>Datos Reporte</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body bgcolor="#3399cc" text="#FFFFFF">
<?php
mysql_connect("localhost","nobody");
$result=mysql_db_query("idime","select * from usuarios where id_usu='$id_usu$'");
if ($row=mysql_fetch_array($result))
    {
?>
<table width="75%" border="0" align="center">
  <tr> 
    <td width="39%">&nbsp;</td>
    <td width="61%"><div align="center"><font size="6">Reporte de Servicio</font></div></td>
  </tr>
</table>
<form method="post" action="../PAGINAWE/datos_grabados_reporte.php">
  <table width="80%" border="0" align="center">
    <tr> 
      <td>&nbsp;</td>
      <td><div align="center"><strong><font color="#000000" size="4"><em>Identificaci&oacute;n</em></font></strong></div></td>
      <td><div align="center"><strong><font color="#000000" size="4"><em>Nombres</em></font></strong></div></td>
      <td><div align="center"><strong><font color="#000000" size="4"><em>Sede</em></font></strong></div></td>
      <td><div align="center"><strong><font color="#000000" size="4"><em>&Aacute;rea</em></font></strong></div></td>
      <td><div align="center"><strong><font color="#000000" size="4"><em>Tel&eacute;fono 
          o Ext:</em></font></strong></div></td>
    </tr>
    <tr> 
      <td><input name="id_usu" type="hidden" id="id_usu5" value="<? echo $row["id_usu"]?>"></td>
      <td><center>
          <?php echo $row["id_usu"]?> </center></td>
      <td><center>
          <?php echo $row["nom_usu"]?></center></td>
      <td><center>
          <?php echo $row["sede_usu"]?></center></td>
      <td><center>
          <?php echo $row["area_usu"]?></center></td>
      <td><center>
          <?php echo $row["tel_usu"]?></center></td>
    </tr>
  </table>
  <table width="75%" border="0" align="center">
    <tr> 
      <td><p align="justify"><strong><font color="#CCCCCC" face="Verdana, Arial, Helvetica, sans-serif"><em>A 
          continuaci&oacute;n usted deber&aacute; describir detalladamente el 
          problema que se le esta presentando en los casos en los cuales el programa 
          genere un mensaje de error por favor escribir el mensaje y en que momento 
          sucede, por ejemplo cuando grabo, cuando salgo, cuando busco etc.</em></font></strong></p></td>
    </tr>
    <tr> 
      <td><center>
          <textarea name="det_rep" cols="75" rows="5" id="textarea"></textarea>
        </center></td>
    </tr>
    <tr> 
      <td><center><input name="enviar reporte" type="submit" id="enviar reporte" value="Enviar Reporte"></center></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <br>
<center>
  </center>
</form>

<?php
   }
   else
   {
   echo "Registro no existe";
   } 

?>
</h1>
</body>
</html>
