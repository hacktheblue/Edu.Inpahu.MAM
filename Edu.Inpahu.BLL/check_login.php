<?php 
session_start();
header('Content-Type: text/html; charset=iso-8859-1');
require_once('Connections/crm.php');
mysql_select_db($database_crm, $crm); 

$sql="SELECT * FROM accountmanager";
$result = mysql_query($sql,$crm) or die(mysqli_error());
$fila =array();
while ($row=mysql_fetch_assoc($result)) {
	$fila[] = $row;
}

$valCountUseName = 0;
$valCountPassword = 0;

$userName = "";
$password = "";

if(isset($_POST['userNS']))
	$userName = $_POST['userNS'];

if(isset($_POST['passwordS']))
	$password = $_POST['passwordS'];


$password = sha1($password);
foreach ($fila  as $inArray => $valueArray) {

	if($userName==$valueArray['IdAccountManager'])
		$valCountUseName = 1;
	if($password==$valueArray['AccountManagerPassword'])
		$valCountPassword = 1;

}
	$resultValid =  2 ;
echo $resultValid;
if($resultValid==2){
	$_SESSION['user'] = $userName;
	$_SESSION['password'] = $password;
}
?>