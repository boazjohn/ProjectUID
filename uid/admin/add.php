<?php

	require_once('auth.php');

$connect = mysql_connect("localhost", "admin", "yahoo");
//create database
$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_data") or die(mysql_error());
mysql_select_db("user_data");
$admin = "CREATE TABLE IF NOT EXISTS udetails (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
uid varchar(255) NOT NULL,
first_name varchar(255) NOT NULL,
last_name varchar(255) NOT NULL,
dd INT(2) NOT NULL,
mm varchar(155) NOT NULL,
yyyy INT(4) NOT NULL,
sex varchar(255) NOT NULL,
address_line_one varchar(255) NOT NULL,
address_line_two varchar(255) NOT NULL,
address_line_three varchar(255) NOT NULL,
pincode varchar(255) NOT NULL,
panchayath varchar(255) NOT NULL,
taluk varchar(255) NOT NULL,
district varchar(255) NOT NULL,
state varchar(255) NOT NULL,
phone_no varchar(255) NOT NULL,
email varchar(255)
)";
$result = mysql_query($admin) or die(mysql_error());

$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_db") or die(mysql_error());
mysql_select_db("user_db");
$admin = "CREATE TABLE IF NOT EXISTS udetails (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
uid varchar(255) NOT NULL,
first_name varchar(255) NOT NULL,
last_name varchar(255) NOT NULL,
dd INT(2) NOT NULL,
mm varchar(155) NOT NULL,
yyyy INT(4) NOT NULL,
sex varchar(255) NOT NULL,
address_line_one varchar(255) NOT NULL,
address_line_two varchar(255) NOT NULL,
address_line_three varchar(255) NOT NULL,
pincode varchar(255) NOT NULL,
panchayath varchar(255) NOT NULL,
taluk varchar(255) NOT NULL,
district varchar(255) NOT NULL,
state varchar(255) NOT NULL,
phone_no varchar(255) NOT NULL,
email varchar(255) NOT NULL,
password varchar(255) NOT NULL
)";
$result = mysql_query($admin) or die(mysql_error());

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dd=$_POST['dd'];
$mm=$_POST['mm'];
$yyyy=$_POST['yyyy'];
$sex=$_POST['sex'];
$add1=$_POST['add1'];
$add2=$_POST['add2'];
$add3=$_POST['add3'];
$pin=$_POST['pin'];
$panc=$_POST['panc'];
$tal=$_POST['tal'];
$dis=$_POST['dis'];
$state=$_POST['state'];
$phno=$_POST['phno'];
$email=$_POST['email'];

		switch ($dis) {
case "Thiruvananthapuram":
$uid = '01';break;
case "Kollam":
$uid = '02';break;
case "Pathanamthitta":
$uid = '03';break;
case "Alappuzha":
$uid = '04';break;
case "Kottayam":
$uid = '05';break;
case "Idukki":
$uid = '06';break;
case "Ernakulam":
$uid = '07';break;
case "Thrissur":
$uid = '08';break;
case "Malappuram":
$uid = '09';break;
case "Kozhikode":
$uid = '10';break;
case "Wayanad":
$uid = '11';break;
case "Palakkad":
$uid = '12';break;
case "Kannur":
$uid = '13';break;
case "Kasargod":
$uid = '14';break;
default:
$uid= '00';break;
}
switch ($state) {
case "Kerala":
$uid .= 'KE';break;
default: $uid.= "XX";break;
}
$uid .=$dd;

switch ($mm) {
case 'January':
$uid .= 'JA';break;
case 'February':
$uid .= 'FB';break;
case 'March':
$uid .= 'MR';break;
case 'April':
$uid .= 'AP';break;
case 'May':
$uid .= 'MY';break;
case 'June':
$uid .= 'JU';break;
case 'July':
$uid .= 'JL';break;
case 'August':
$uid .= 'AU';break;
case 'September':
$uid .= 'SP';break;
case 'October':
$uid .= 'OC';break;
case 'November':
$uid .= 'NV';break;
case 'December':
$uid .= 'DC';break;
}

$uid .=$yyyy;
switch ($sex) {
case "Male":
$uid .= 'M';break;
default: $uid.= "F";break;
}
$uid .= rand('00000000','9999999');

mysql_select_db("user_data");
$insert = "INSERT INTO udetails (uid, first_name, last_name, dd, mm, yyyy, sex, address_line_one, address_line_two, address_line_three, pincode, panchayath, taluk, district, state, phone_no,email) ".
			"VALUES ('$uid', '$fname', '$lname', '$dd', '$mm', '$yyyy', '$sex', '$add1', '$add2', '$add3', '$pin', '$panc', '$tal', '$dis', '$state', '$phno', '$email')";
			$results = mysql_query($insert) or die(mysql_error());

mysql_select_db("user_db");
$uidd = md5($uid);
$password = md5('1234');
$insert = "INSERT INTO udetails (uid, password, first_name, last_name, dd, mm, yyyy, sex, address_line_one, address_line_two, address_line_three, pincode, panchayath, taluk, district, state, phone_no,email) ".
			"VALUES ('$uidd', '$password', '$fname', '$lname', '$dd', '$mm', '$yyyy', '$sex', '$add1', '$add2', '$add3', '$pin', '$panc', '$tal', '$dis', '$state', '$phno', '$email')";
			$results = mysql_query($insert) or die(mysql_error());
			
	    if ($result){
	header ("Refresh: 3;add-user2.php");
    }
    else die(mysql_error());	
mysql_close();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Citizen Details | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>
<body>
<br><br><br>
<div class="err"> <img src="images/loading.gif"><br />Please wait... Processing UID :<?php echo '      [',$uid,'] ';?></img>
</body>
</html>


