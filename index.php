<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Unique ID by beta™</title>
<meta http-equiv="Content-Type"
content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="module.css" />
</head>
<body>

<div class="intro"> Unique ID <sup>beta™</sup> is a Project by <a href="about.php" target="_blank">Team Beta</a>, CS6 [CSE 2007-2011]<br><br><span class="grayline">Continue to <a href="admin/login-form.php">Admin Login</a> or <a href="client/login-form.php">Citizen Login</a> or <a href="kiosk/login-form.php">Kiosk Login</a></span></div>
</body>
</html>
