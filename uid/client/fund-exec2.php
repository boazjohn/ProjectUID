<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Fund Transfer | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
<div class="smenu"><div class="spacer"> </div><div class="bank"><a href="member-banking.php"><img src="images/bank_2.png"></img></a></div><div class="spacer"></div>
<div class="market"><a href="member-market.php"><img src="images/market_2.png"></img></a></div><div class="spacer"> </div>
<div class="shop"><a href="member-shop.php"><img src="images/shop_2.png"></img></a></div><div class="spacer"> </div>
<div class="ticket"><a href="member-ticket.php"><img src="images/ticket_2.png"></img></a></div><div class="spacer"></div>
<div class="health"><a href="member-health.php"><img src="images/health_2.png"></img></a></div><div class="spacer"> </div>
</div>
<?php
//connect to mysql
mysql_connect("localhost","admin","yahoo"); 
$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_db") or die(mysql_error());
mysql_select_db("user_db");
$admin = "CREATE TABLE IF NOT EXISTS udetails_log (
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

$uidd = $_SESSION['SESS_MEMBER_ID'];
$bnkaccnt=$_POST["bnkaccnt"];
$accntno=$_POST['accnt_no'];
$branch=$_POST['branch'];
$name=$_POST['name'];
$amt=$_POST['amount_inr'];
$np=$_POST['noop'];

	$connect = mysql_connect("localhost", "admin", "yahoo");
 mysql_select_db("user_db"); 
$result = mysql_query("SELECT tip_id FROM tip_tab order by tip_id desc limit 1");
$results = mysql_query($query);
$r=mysql_fetch_array($result);
$mid=$r["tip_id"];
$ran=rand('1',$mid);
 
$result = mysql_query("select * from tip_tab where tip_id='$ran'"); 
$r=mysql_fetch_array($result);
$tip_head=$r["tip_head"];
$tip_content=$r["tip_content"];

echo '<div class="boxexpand2"><h3>Tip Of The Day</h3><h4>',$tip_head,'</h4>',$tip_content,'</div>';

?>

<div class="boxexpand"><div class="wrapperoverflowmargin"><div class="boxfloatbig">
<?php 
if($accntno!=0&&$amt!=0&&$bnkaccnt!=0)
{
mysql_select_db("user_db"); 
$result = mysql_query("select * from udetails_ext_bank where uid_id='$uidd' AND bankaccount='$bnkaccnt'");
$r=mysql_fetch_array($result);
$account=$r["bankaccount"];
$type=$r["banktype"];
$bname=$r["bankname"];
$amount=$r["bank_amount"];
if($amount>=$amt)
{
$amount=$amount-$amt;

mysql_query("UPDATE udetails_ext_bank SET bank_amount = '$amount'
WHERE uid_id = '$uidd' AND bankaccount = '$bnkaccnt'");
$data='Transferred Rs.';$data.=$amt;$data.='/- to ';$data.=$name;$data.=' (';$data.=$accntno;$data.='), of ';$data.=$branch;$data.=' branch from Account, ';$data.=$bnkaccnt;$data.='. Balance amount: Rs.';$data.=$amount;$data.='/-';		
$insert = "INSERT INTO udetails_log (uid_id, body) ".
			"VALUES ('$uidd', '$data')";
			$results = mysql_query($insert) or die(mysql_error());
			
echo 'Transaction Complete!<hr><br>',$data;}
else
{ echo 'Cannot proceed, low account balance!';}
}
else { echo 'Error in transaction.  <a href="fund-transfer.php">Go back</a>'; }
mysql_close(); echo '<form action="member-banking.php"><br><br><input type="submit" value="Done" class="btnuidright"></form>'; ?>
<br>
<br>
<br>
</div>

<div class="bigtext"><div class="boxbutton"><a href="fund-transfer.php">Fund Transfer</a></div></div></div></div>
<div class="tmsg"><br><br>Welcome to Banking Central. Control all your banking needs from here. Transfer funds, pay bills and do more with everyday banking. Banking made simple! <br> [ <?php echo date("l, F d, Y h:i" ,time());?> ]</div>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="logout.php">Logout</a></div>
</body>
</html>
