<?php
	require_once('auth.php');
	
$connect = mysql_connect("localhost", "admin", "yahoo");

mysql_select_db("user_db");


$update = "UPDATE doc_appoinment SET
status = '" . $_POST['submit'] . "',
WHERE question = '" . $_POST['ques'] . "'";

$results = mysql_query($update) or die(mysql_error());

    if ($results){
	header ("Refresh: 1;reply.php");
    }
    else die(mysql_error());	

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Reply | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>
<body>
<br><br><br>
<div class="err"> <img src="images/loading.gif"><br />Posting Reply...</img>
</body>
</html>