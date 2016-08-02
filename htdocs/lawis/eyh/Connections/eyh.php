<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_eyh = "mysql.nmnwse.org";
$database_eyh = "nmnwse_org";
$username_eyh = "nmnwse_org";
$password_eyh = "3TmTzJr8lFsHI18v";
$eyh = mysql_pconnect($hostname_eyh, $username_eyh, $password_eyh) or trigger_error(mysql_error(),E_USER_ERROR); 
?>