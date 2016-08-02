<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_ctn4 = "mysql.nmnwse.org";
$database_ctn4 = "nmnwse_org";
$username_ctn4 = "nmnwse_org";
$password_ctn4 = "3TmTzJr8lFsHI18v";
$ctn4 = mysql_pconnect($hostname_ctn4, $username_ctn4, $password_ctn4) or trigger_error(mysql_error(),E_USER_ERROR); 
?>