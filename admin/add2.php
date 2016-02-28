<?php

	require_once('auth.php');

$connect = mysql_connect("localhost", "admin", "yahoo");
//create database
$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_data") or die(mysql_error());
mysql_select_db("user_data");
$admin = "CREATE TABLE IF NOT EXISTS udetails_ext (
uid_id varchar(255) NOT NULL PRIMARY KEY,
demat varchar(255) NOT NULL,
pancard varchar(255) NOT NULL,
drvlicense varchar(255) NOT NULL,
electionid varchar(255) NOT NULL,
bid_1 INT NOT NULL,
bid_2 INT NOT NULL,
bid_3 INT NOT NULL,
cid_1 INT NOT NULL,
cid_2 INT NOT NULL
)";
$result = mysql_query($admin) or die(mysql_error());

$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_data") or die(mysql_error());
mysql_select_db("user_data");
$admin = "CREATE TABLE IF NOT EXISTS udetails_ext_bank (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
uid_id varchar(255) NOT NULL,
id_uid INT NOT NULL,
bankaccount varchar(255) NOT NULL,
banktype varchar(255) NOT NULL,
bankname varchar(255) NOT NULL,
bank_amount INT(25) NOT NULL

)";
$result = mysql_query($admin) or die(mysql_error());

$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_data") or die(mysql_error());
mysql_select_db("user_data");
$admin = "CREATE TABLE IF NOT EXISTS udetails_ext_credit (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
uid_id varchar(255) NOT NULL,
id_uid INT NOT NULL,
creditcard varchar(255) NOT NULL,
creditvalid varchar(255) NOT NULL,
creditcsv varchar(255) NOT NULL

)";
$result = mysql_query($admin) or die(mysql_error());

$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_db") or die(mysql_error());
mysql_select_db("user_db");
$admin = "CREATE TABLE IF NOT EXISTS udetails_ext (
uid_id varchar(255) NOT NULL PRIMARY KEY,
demat varchar(255) NOT NULL,
pancard varchar(255) NOT NULL,
drvlicense varchar(255) NOT NULL,
electionid varchar(255) NOT NULL,
bid_1 INT NOT NULL,
bid_2 INT NOT NULL,
bid_3 INT NOT NULL,
cid_1 INT NOT NULL,
cid_2 INT NOT NULL
)";
$result = mysql_query($admin) or die(mysql_error());
$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_db") or die(mysql_error());
mysql_select_db("user_db");
$admin = "CREATE TABLE IF NOT EXISTS udetails_ext_bank (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
uid_id varchar(255) NOT NULL,
id_uid INT NOT NULL,
bankaccount varchar(255) NOT NULL,
banktype varchar(255) NOT NULL,
bankname varchar(255) NOT NULL,
bank_amount INT(25) NOT NULL

)";
$result = mysql_query($admin) or die(mysql_error());

$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_db") or die(mysql_error());
mysql_select_db("user_db");
$admin = "CREATE TABLE IF NOT EXISTS udetails_ext_credit (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
uid_id varchar(255) NOT NULL,
id_uid INT NOT NULL,
creditcard varchar(255) NOT NULL,
creditvalid varchar(255) NOT NULL,
creditcsv varchar(255) NOT NULL

)";
$result = mysql_query($admin) or die(mysql_error());


$bnkaccnt1=$_POST['bnkaccnt1'];
$bnkaccnt2=$_POST['bnkaccnt2'];
$bnkaccnt3=$_POST['bnkaccnt3'];
$typ1=$_POST['typ1'];
$typ2=$_POST['typ2'];
$typ3=$_POST['typ3'];
$bank1=$_POST['bank1'];
$bank2=$_POST['bank2'];
$bank3=$_POST['bank3'];
$credit1=$_POST['credit1'];
$credit2=$_POST['credit2'];
$valid1=$_POST['cmm1'];
$valid1.=$_POST['cyyyy1'];
$valid2=$_POST['cmm1'];
$valid2.=$_POST['cyyyy1'];
$csv1=$_POST['csv1'];
$csv2=$_POST['csv2'];
$demat=$_POST['demat'];
$pan=$_POST['pan'];
$eleid=$_POST['eleid'];
$drvlic=$_POST['drvlic'];



//select which database you want to edit
mysql_select_db("user_data"); 
//select the table
$result = mysql_query("select * from udetails ORDER BY id DESC LIMIT 1");

	
	$r=mysql_fetch_array($result);	
   //the format is $variable = $r["nameofmysqlcolumn"];
    $uid=$r["uid"];

$uidd = md5($uid);
$val_0=0;
$val_1=1;
$val_2=2;
$val_3=3;
$val_amt=10000;

function checkEmpty ($strString)
{
if (empty($strString))
		{ return 0; }
else 
{ return 1;  }
}

/* ---------------- start ext_tables ----------------------------------- */

if (empty($bnkaccnt1))
		{
mysql_select_db("user_data");
$insert = "INSERT INTO udetails_ext_bank (uid_id, id_uid) ".
			"VALUES ('$uid', '$val_1')";
			$results = mysql_query($insert) or die(mysql_error());
mysql_select_db("user_db");
$insert = "INSERT INTO udetails_ext_bank (uid_id, id_uid) ".
			"VALUES ('$uidd', '$val_1')";
			$results = mysql_query($insert) or die(mysql_error());
		}
else {
mysql_select_db("user_data");
$insert = "INSERT INTO udetails_ext_bank (uid_id, id_uid, bankaccount, banktype, bankname, bank_amount) ".
			"VALUES ('$uid', '$val_1', '$bnkaccnt1', '$typ1', '$bank1', '$val_amt')";
			$results = mysql_query($insert) or die(mysql_error());
mysql_select_db("user_db");
$insert = "INSERT INTO udetails_ext_bank (uid_id, id_uid, bankaccount, banktype, bankname, bank_amount) ".
			"VALUES ('$uidd', '$val_1', '$bnkaccnt1', '$typ1', '$bank1', '$val_amt')";	
$results = mysql_query($insert) or die(mysql_error());			
}

if (empty($bnkaccnt2))
		{
mysql_select_db("user_data");
$insert = "INSERT INTO udetails_ext_bank (uid_id, id_uid) ".
			"VALUES ('$uid', '$val_2')";
			$results = mysql_query($insert) or die(mysql_error());
mysql_select_db("user_db");
$insert = "INSERT INTO udetails_ext_bank (uid_id, id_uid) ".
			"VALUES ('$uidd', '$val_2')";
			$results = mysql_query($insert) or die(mysql_error());
		}
else {
mysql_select_db("user_data");
$insert = "INSERT INTO udetails_ext_bank (uid_id, id_uid, bankaccount, banktype, bankname, bank_amount) ".
			"VALUES ('$uid', '$val_2', '$bnkaccnt2', '$typ2', '$bank2', '$val_amt')";
			$results = mysql_query($insert) or die(mysql_error());
mysql_select_db("user_db");
$insert = "INSERT INTO udetails_ext_bank (uid_id, id_uid, bankaccount, banktype, bankname, bank_amount) ".
			"VALUES ('$uidd', '$val_2', '$bnkaccnt2', '$typ2', '$bank2', '$val_amt')";	
$results = mysql_query($insert) or die(mysql_error());			
}

if (empty($bnkaccnt3))
		{
mysql_select_db("user_data");
$insert = "INSERT INTO udetails_ext_bank (uid_id, id_uid) ".
			"VALUES ('$uid', '$val_3')";
			$results = mysql_query($insert) or die(mysql_error());
mysql_select_db("user_db");
$insert = "INSERT INTO udetails_ext_bank (uid_id, id_uid) ".
			"VALUES ('$uidd', '$val_3')";
			$results = mysql_query($insert) or die(mysql_error());
		}
else {
mysql_select_db("user_data");
$insert = "INSERT INTO udetails_ext_bank (uid_id, id_uid, bankaccount, banktype, bankname, bank_amount) ".
			"VALUES ('$uid', '$val_3', '$bnkaccnt3', '$typ3', '$bank3', '$val_amt')";
			$results = mysql_query($insert) or die(mysql_error());
mysql_select_db("user_db");
$insert = "INSERT INTO udetails_ext_bank (uid_id, id_uid, bankaccount, banktype, bankname, bank_amount) ".
			"VALUES ('$uidd', '$val_3', '$bnkaccnt3', '$typ3', '$bank3', '$val_amt')";	
$results = mysql_query($insert) or die(mysql_error());			
}

if (empty($credit1))
		{
mysql_select_db("user_data");
$insert = "INSERT INTO udetails_ext_credit (uid_id, id_uid) ".
			"VALUES ('$uid', '$val_1')";
			$results = mysql_query($insert) or die(mysql_error());
mysql_select_db("user_db");
$insert = "INSERT INTO udetails_ext_credit (uid_id, id_uid) ".
			"VALUES ('$uidd', '$val_1')";
			$results = mysql_query($insert) or die(mysql_error());
		}
else {
mysql_select_db("user_data");
$insert = "INSERT INTO udetails_ext_credit (uid_id, id_uid, creditcard, creditvalid, creditcsv) ".
			"VALUES ('$uid', '$val_1', '$credit1', '$valid1', '$csv1')";
			$results = mysql_query($insert) or die(mysql_error());
mysql_select_db("user_db");
$insert = "INSERT INTO udetails_ext_credit (uid_id, id_uid, creditcard, creditvalid, creditcsv) ".
			"VALUES ('$uidd', '$val_1', '$credit1', '$valid1', '$csv1')";
$results = mysql_query($insert) or die(mysql_error());			
}

if (empty($credit2))
		{
mysql_select_db("user_data");
$insert = "INSERT INTO udetails_ext_credit (uid_id, id_uid) ".
			"VALUES ('$uid', '$val_2')";
			$results = mysql_query($insert) or die(mysql_error());
mysql_select_db("user_db");
$insert = "INSERT INTO udetails_ext_credit (uid_id, id_uid) ".
			"VALUES ('$uidd', '$val_2')";
			$results = mysql_query($insert) or die(mysql_error());
		}
else {
mysql_select_db("user_data");
$insert = "INSERT INTO udetails_ext_credit (uid_id, id_uid, creditcard, creditvalid, creditcsv) ".
			"VALUES ('$uid', '$val_2', '$credit2', '$valid2', '$csv2')";
			$results = mysql_query($insert) or die(mysql_error());
mysql_select_db("user_db");
$insert = "INSERT INTO udetails_ext_credit (uid_id, id_uid, creditcard, creditvalid, creditcsv) ".
			"VALUES ('$uidd', '$val_2', '$credit2', '$valid2', '$csv2')";
$results = mysql_query($insert) or die(mysql_error());	

}
/* --------------------------------- end ext_tables------------------------------------- */


$bid1= checkEmpty($bnkaccnt1);
$bid2= checkEmpty($bnkaccnt2);
$bid3= checkEmpty($bnkaccnt3);
$cid1= checkEmpty($credit1);
$c1d2= checkEmpty($credit2);
mysql_select_db("user_data");
$insert = "INSERT INTO udetails_ext (uid_id, demat, pancard, electionid, drvlicense, bid_1, bid_2, bid_3, cid_1, cid_2) ".
			"VALUES ('$uid', '$demat', '$pan', '$eleid', '$drvlic', '$bid1', '$bid2', '$bid3', '$cid1', '$cid2')";
			$results = mysql_query($insert) or die(mysql_error());
mysql_select_db("user_db");
$insert = "INSERT INTO udetails_ext (uid_id, demat, pancard, electionid, drvlicense, bid_1, bid_2, bid_3, cid_1, cid_2) ".
			"VALUES ('$uidd', '$demat', '$pan', '$eleid', '$drvlic', '$bid1', '$bid2', '$bid3', '$cid1', '$cid2')";
			$results = mysql_query($insert) or die(mysql_error());
			
					
	    if ($result){
	header ("Refresh: 3;add-user3.php");
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


