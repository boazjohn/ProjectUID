<?php

	require_once('auth.php');

$connect = mysql_connect("localhost", "admin", "yahoo");
//create database
$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_data") or die(mysql_error());
mysql_select_db("user_data");
$admin = "CREATE TABLE IF NOT EXISTS udetails_ext1 (
uid_id varchar(255) NOT NULL,
profession varchar(255) NOT NULL,
annincome varchar(255) NOT NULL,
foreign key (uid_id) references udetails(uid)
)";
$result = mysql_query($admin) or die(mysql_error());

$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_db") or die(mysql_error());
mysql_select_db("user_db");
$admin = "CREATE TABLE IF NOT EXISTS udetails_ext1 (
uid_id varchar(255) NOT NULL,
profession varchar(255) NOT NULL,
annincome varchar(255) NOT NULL,
foreign key (uid_id) references udetails(uid)
)";
$result = mysql_query($admin) or die(mysql_error());

$prof=$_POST['prof'];
$anninc=$_POST['anninc'];

mysql_select_db("user_data"); 
//select the table
$result = mysql_query("select * from udetails order by id desc limit 1");
	$results = mysql_query($query);
	
	while($r=mysql_fetch_array($result))
{	
   //the format is $variable = $r["nameofmysqlcolumn"];
     
$uid=$r["uid"];
break;

}
$uidd=md5($uid);
if($prof=='Other')
{
$prof=$_POST['prof1'];
}


mysql_select_db("user_data");
$insert = "INSERT INTO udetails_ext1 (uid_id,profession,annincome) ".
			"VALUES ('$uid', '$prof', '$anninc')";
			$results = mysql_query($insert) or die(mysql_error());

mysql_select_db("user_db");
$insert = "INSERT INTO udetails_ext1 (uid_id,profession,annincome) ".
			"VALUES ('$uidd','$prof', '$anninc')";
			$results = mysql_query($insert) or die(mysql_error());
if ($result){			
if($prof=='Doctor')
{			
	header ("Refresh: 3;add-user4.php");
}
else{
	header ("Refresh: 3;upload/upload-image.php");
	}
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


