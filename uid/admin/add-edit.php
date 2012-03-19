<?php
require_once('auth.php');

$connect = mysql_connect("localhost", "admin", "yahoo");

mysql_select_db("user_data");


$update = "UPDATE udetails SET
first_name = '" . $_POST['fname'] . "',
last_name = '" . $_POST['lname'] . "',
dd = '" . $_POST['dd'] . "',
mm = '" .$_POST['mm']."',
yyyy = '" . $_POST['yyyy'] . "',
sex = '" . $_POST['sex'] . "',
address_line_one = '" . $_POST['add1'] . "',
address_line_two = '" . $_POST['add2'] . "',
address_line_three = '" .$_POST['add3']."',
pincode = '" . $_POST['pin'] . "',
panchayath = '" . $_POST['panc'] . "',
taluk = '" . $_POST['tal'] . "',
district = '" . $_POST['dis'] . "',
state = '" .$_POST['state']."',
phone_no = '" . $_POST['phno'] . "',
email = '" . $_POST['email'] . "'
WHERE uid = '" . $_POST['uid'] . "'";

$results = mysql_query($update) or die(mysql_error());

$uidd=md5($_POST['uid']);

mysql_select_db("user_db");

$update = "UPDATE udetails SET
first_name = '" . $_POST['fname'] . "',
last_name = '" . $_POST['lname'] . "',
dd = '" . $_POST['dd'] . "',
mm = '" .$_POST['mm']."',
yyyy = '" . $_POST['yyyy'] . "',
sex = '" . $_POST['sex'] . "',
address_line_one = '" . $_POST['add1'] . "',
address_line_two = '" . $_POST['add2'] . "',
address_line_three = '" .$_POST['add3']."',
pincode = '" . $_POST['pin'] . "',
panchayath = '" . $_POST['panc'] . "',
taluk = '" . $_POST['tal'] . "',
district = '" . $_POST['dis'] . "',
state = '" .$_POST['state']."',
phone_no = '" . $_POST['phno'] . "',
email = '" . $_POST['email'] . "'
WHERE uid = '" . $uidd . "'";

$results = mysql_query($update) or die(mysql_error());
    if ($results){
	header ("Refresh: 3;member-index.php");
    }
    else die(mysql_error());	

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit Citizen Details | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>
<body>
<br><br><br>
<div class="err"> <img src="images/loading.gif"><br />Please wait... Editing :<?php echo '      [',$_POST[uid],'] ';?></img>
</body>
</html>