<?php

	require_once('auth.php');

$connect = mysql_connect("localhost", "admin", "yahoo");
//create database
$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_data") or die(mysql_error());
mysql_select_db("user_db");
$admin = "CREATE TABLE IF NOT EXISTS tip_tab (
tip_id INT(10) NOT NULL AUTO_INCREMENT,
tip_head varchar(255) NOT NULL,
tip_content varchar(2000) NOT NULL,
PRIMARY KEY ( tip_id )
)";
$result = mysql_query($admin) or die(mysql_error());



$tip_head=$_POST['tiphead'];
$tip_content=$_POST['tipbody'];


$insert = "INSERT INTO tip_tab (tip_id, tip_head, tip_content) ".
			"VALUES (NULL, '$tip_head', '$tip_content')";
			$results = mysql_query($insert) or die(mysql_error());

if ($result){			
	header ("Refresh: 2;member-index.php");
	}
	
    else die(mysql_error());	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Citizen Details | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>
<body>
<br><br><br>
<div class="err"> <img src="images/loading.gif"><br />Please wait... </img>
</body>
</html>


