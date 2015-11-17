<?php require_once('classe/academiaconexao.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['usuario'])) {
  $loginUsername=$_POST['usuario'];
  $password=$_POST['senha'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "home.php";
  $MM_redirectLoginFailed = "indexerro.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_academiaconexao, $academiaconexao);
  
  $LoginRS__query=sprintf("SELECT usuario, senha FROM usuario WHERE usuario=%s AND senha=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $academiaconexao) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Personal Store</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="login">
  <div class="logo"><img src="images/logo.png" width="200" height="133"/></div>
  <form id="form1" name="form1" method="POST" action="<?php echo $loginFormAction; ?>" class="login_form">
  <table border="0" cellspacing="3" cellpadding="0">
  <tr>
    <td align="center" valign="top"><img src="images/login_titulo.png" width="146" height="11" /></td>
  </tr>
  <tr>
    <td class="login_campo"><label>
      <input name="usuario" type="text" id="usuario" onfocus="if(this.value == 'Usuario') this.value = ''" value="Usuario" maxlength="23" />
    </label></td>
  </tr>
  <tr>
    <td class="login_campo"><label>
      <input name="senha" type="password" id="senha" onfocus="if(this.value == 'Senha') this.value = ''" value="Senha" maxlength="20" />
    </label></td>
  </tr>
  <tr>
    <td style="font-size:12px; color:#FFF; text-align:center; font-family:Arial;">Usuario ou Senha invalidos.</td>
  </tr>
  <tr>
    <td class="login_bt"><label>
      <input type="submit" name="button" id="button" value="" />
    </label></td>
  </tr>
</table>
  </form>
</div>
</body>
</html>