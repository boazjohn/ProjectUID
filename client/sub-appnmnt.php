<?php

	require_once('auth.php');
	
	mysql_connect("localhost","admin","yahoo");
	
	mysql_select_db("user_db");
	
	$create = "CREATE TABLE IF NOT EXISTS doc_appoinment (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	doc_id varchar(255) NOT NULL,
	user_id varchar(255) NOT NULL,
	time varchar(25) NOT NULL,
	date varchar(25) NOT NULL,
	status varchar(10) NOT NULL
	)";
	$result = mysql_query($create) or die(mysql_error());
	
	$doc_id = $_POST['uid'];
	$asker_id = $_SESSION['SESS_MEMBER_ID'];
	$time = $_POST['time'];
	$dd = $_POST['dd'];
	$mm = $_POST['mm'];
	$yyyy = $_POST['yyyy'];
	$date=$dd.'-'.$mm.'-'.$yyyy;
	
	$insert = "INSERT INTO doc_appoinment(doc_id,user_id,time,date,status) ".
			"VALUES ('$doc_id', '$asker_id', '$time', '$date','waiting')";
			$results = mysql_query($insert) or die(mysql_error());
			
	if ($result){			
	header ("Refresh: 3;member-health.php");
	}
	
    else die(mysql_error());			
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Fix An Appoinment | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>
<body>
<br><br><br>
<div class="err"> <img src="images/loading.gif"><br />Submitting Query. Please wait... </img>
</body>
</html>