<?php 

require_once('../Edu.Inpahu.BLL/Administrador.php');

    $id_usu = $_POST['id_usu'];
    $nom_usu = $_POST['nom_usu'];
    $edad_usu = $_POST['edad_usu'];
    $sexo = $_POST['sexo'];
    $sede_usu = $_POST['sede_usu'];
    $area_usu = $_POST['area_usu'];
    $tel_usu = $_POST['tel_usu'];
    
   
$Mario = new Administrador($ClaseDb);
if($Mario->CrearUsuario($id_usu, $nom_usu, $area_usu,   $sede_usu,  $tel_usu , $sexo)){
    
    
    echo "<h3>Exito</h3>";
    
}else{
    echo "<h3>Exito</h3>";
}

    
 
 
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
        <td width="61%"><div align="center"><font color="#FFFFFF" size="6">Grabaci&oacute;n de 
            Usuarios</font></div></td>
      </tr>
    </table>
  </div>
</h1>
<?php

// Abre la Conexion con la base de datos


// Ejecutamos la sentencia SQL
// Con la instrucci�n mysql_db_query realizamos la consulta a la base de datos


// Mostramos los registros
// Con la instrucci�n mysql_fetch_array verificamos si existen registros en la tabla
if ( mysql_num_rows($result)>0)
{
echo "Este Usuario ya existe en nuestro Sistema!!!";
}

else
{
    $sql="insert into usuarios (usu_id, usu_nombre, usu_edad, usu_sexo, usu_sede, usu_area, usu_tel) VALUES ('$id_usu', '$nom_usu', '$edad_usu', '$sexo', '$sede_usu', '$area_usu', '$tel_usu')";
    $result = mysql_query($sql,$mamcon) or die(mysqli_error());

echo  "! F E L I C I T A C I O N E S � Estas inscrito como uno de nuestros usuarios";
} 
?>

<p align="center"><em><font color="#FF0000" size="5" face="Verdana, Arial, Helvetica, sans-serif"></font></em></p>

<p align="center">&nbsp;</p>
<LI>
<p>&nbsp;</p>
  

</body>
</html>
