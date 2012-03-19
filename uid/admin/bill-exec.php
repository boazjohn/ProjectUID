<?php
	require_once('auth.php');
	
	$connect = mysql_connect("localhost", "admin", "yahoo");
//create database
$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_db") or die(mysql_error());
mysql_select_db("user_db");
$admin = "CREATE TABLE IF NOT EXISTS udetails_ext_bill (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
uid_id varchar(255) NOT NULL,
bill_type varchar(200) NOT NULL,
bill_d varchar(1024) NOT NULL,
bill_amt INT(10) NOT NULL,
bill_date varchar(10) NOT NULL,
active INT NOT NULL
)";
$result = mysql_query($admin) or die(mysql_error());

$uid=$_POST['uid'];
$type=$_POST['type'];
$desc=$_POST['desc'];
$dd=$_POST['dd'];
$mm=$_POST['mm'];
$yyyy=$_POST['yyyy'];
$amt=$_POST['amt'];

$date=$dd;$date.='-';$date.=$mm;$date.='-';$date.=$yyyy;
$active_1=1;	
	
	mysql_select_db("user_db");
$insert = "INSERT INTO udetails_ext_bill (uid_id, bill_type, bill_d, bill_amt, bill_date, active) ".
			"VALUES ('$uid', '$type', '$desc', '$amt', '$date', '$active_1')";
			$results = mysql_query($insert) or die(mysql_error());
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrator Index</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Citizen Portal Management</h1>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="add-user.php">Create New UID</a> | <a href="list-data.php">List UID</a> | <a href="#">Edit UID</a> | <a href="manage.php">Manage Portal</a> | <a href="logout.php">Logout</a></div>
<div class="tspacemod"><br><br>

<div class="boxbutton"><a href="create-bill.php">Create Bill</a></div><br><br>
<div class="boxfloatbig">
<?php

mysql_connect("localhost","admin","yahoo"); 
	
//select which database you want to edit
mysql_select_db("user_db"); 

//select the table
$result = mysql_query("select * from udetails WHERE uid = '$uid'");

$r=mysql_fetch_array($result);	
        
$fname=$r["first_name"];
$lname=$r["last_name"];
mysql_close();
$name=$fname;$name.=' ';$name.=$lname;
echo 'Success! Bill Created for ',$name,'<br><br>',$type,' bill details:<br>Description:',$desc,'<br>Dated:',$date,'<br>Amount Rs.',$amt;
?>
</div>

</div>
</body>
</html>
