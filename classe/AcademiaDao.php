<?php

class AcademiaDao {

private $hostname;
private $database;
private $username;
private  $password;
private $academiaconexao; 
    
public function __construct() {

$hostname = "localhost";
$database = "academia";
$username = "root";
$password = "123";

$academiaconexao = mysql_connect($hostname, $username, $password)
        or trigger_error(mysql_error(), E_USER_ERROR);
mysql_select_db($database);

}   

function getUsuarios(){
 
$re = mysql_query("select * from usuario order by iduser");

if (mysql_errno() != 0) {
    return NULL;
}

while ($l = mysql_fetch_array($re))
{
    $retorno[] = $l;
}

mysql_close();
return $retorno;

}



}