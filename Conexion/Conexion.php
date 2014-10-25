<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_mam = "localhost";
$database_mam = "mam";
$username_mam = "root";
$password_mam = "";
$mam = mysql_pconnect($hostname_mam, $username_mam, $password_mam) or trigger_error(mysql_error(),E_USER_ERROR); 
$db_selected = mysql_select_db('mam', $mam);
