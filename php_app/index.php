<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	//unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ceneco</title>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
<style type="text/css">
<!--
body {
background-image:url(images/ID.png);
background-repeat:no-repeat;
background-position:top;

	background-color: #009900;
}
-->
</style>




<script type="text/javascript">
function validateForm()
{
var x=document.forms["myform"]["username"].value;
if (x==null || x=="")
  {
  alert("Username must be filled out");
  return false;
  }
  
var x=document.forms["myform"]["password"].value;
if (x==null || x=="")
  {
  alert("Password must be filled out");
  return false;
  }
}
</script>

</head>

<body>

<form action="loginexec.php" name="myform" method="post" onsubmit="return validateForm()">

  
<table width="364" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
  <td width="97" height="42"><div align="right">UserName:</div></td>
  <td width="261"><input name="username" type="text" class="txtuser" /></td>
  </tr>
  <tr>
  <td height="37"><div align="right">Password:</div></td>
  <td><input name="password" type="password" class="txtpassword" /></td>
  </tr>
  <tr>
  <td height="20">&nbsp;</td>
  <td>not yet a member? register <a rel="facebox" href="register.php">here</a></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td><input name="" type="submit" value="login" class="loginbut" /></td>
  </tr>
</table>

</form>
<a rel="facebox" href="addrecords.php"></a></div>
<a rel="facebox" href="addrecords.php"></a>
</body>

</html>
