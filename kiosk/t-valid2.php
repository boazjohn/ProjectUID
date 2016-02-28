<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Citizen Control Panel</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
<?php
//connect to mysql
mysql_connect("localhost","admin","yahoo"); 
$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_db") or die(mysql_error());
mysql_select_db("user_db");
$admin = "CREATE TABLE IF NOT EXISTS udetails_tlog (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
uid_id varchar(255) NOT NULL,
body varchar(1024) NOT NULL,
tstamp TIMESTAMP NOT NULL
)";		
$result = mysql_query($admin) or die(mysql_error());
$val_0=0;
$val_1=1;
$val_2=2;
$val_3=3;

$tuid = $_SESSION['SESS_MEMBER_ID'];
$id = $_POST["id"];
$result = mysql_query("select * from udetails_travel where id=$id");
$r=mysql_fetch_array($result);	
$uid_id=$r["uid_id"];	 
$frm=$r["frm"];
$dest=$r["dest"];
$date=$r["date"];
$timed=$r["time"];
$tno=$r["tnum"];
$class=$r["class"];
$active=$r["active"];
$type=$r["type"];
$amt=$r["amount"];

?>

<div class="tspacemid"><div class="bigtext">
<?php 
mysql_select_db("user_db");
mysql_query("UPDATE udetails_travel SET active = '$val_0' WHERE uid_id = '$uid_id' AND id = '$id'");
$data=$type;$data.=' Travel Details: from: ';$data.=$frm;$data.=' to: ';$data.=$dest;$data.=' dated: ';$data.=$date;$data.=' time: ';$data.=$timed;$data.=' No# ';$data.=$tno;$data.=' class: ';$data.=$class;$data.=' amount: ';$data.=$amt;$data.=' from kiosk: ';$data.=$tuid;
$insert = "INSERT INTO udetails_tlog (uid_id, body) ".
			"VALUES ('$uid_id', '$data')";
			$results = mysql_query($insert) or die(mysql_error());
			
echo 'Transaction Complete!<hr><br>',$data;
mysql_close(); echo '<form action="member-index.php"><br><br><input type="submit" value="Done" class="btnuidright"></form>'; 

?>

</div>
</div>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="logout.php">Logout</a></div>
</body>
</html>
