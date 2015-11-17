<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_academiaconexao = "localhost";
$database_academiaconexao = "academia";
$username_academiaconexao = "root";
$password_academiaconexao = "123";
$academiaconexao = mysql_connect($hostname_academiaconexao, $username_academiaconexao, $password_academiaconexao) or trigger_error(mysql_error(),E_USER_ERROR); 

?>