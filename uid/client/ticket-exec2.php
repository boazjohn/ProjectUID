<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ticket Booking | UID</title>
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
$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_db") or die(mysql_error());
mysql_select_db("user_db");
$admin = "CREATE TABLE IF NOT EXISTS udetails_tlog (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
uid_id varchar(255) NOT NULL,
body varchar(1024) NOT NULL,
tstamp TIMESTAMP NOT NULL
)";
$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_db") or die(mysql_error());
mysql_select_db("user_db");
$admin = "CREATE TABLE IF NOT EXISTS udetails_travel (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
uid_id varchar(255) NOT NULL,
type varchar(255) NOT NULL,
frm varchar(255) NOT NULL,
dest varchar(255) NOT NULL,
date varchar(255) NOT NULL,
time varchar(255) NOT NULL,
tnum varchar(255) NOT NULL,
class varchar(255) NOT NULL,
amount INT NOT NULL,
active INT NOT NULL
)";		
		
$result = mysql_query($admin) or die(mysql_error());
$val_0=0;
$val_1=1;
$val_2=2;
$val_3=3;

$uidd = $_SESSION['SESS_MEMBER_ID'];
$id=$_POST["id"];
$from=$_POST['from'];
$dest=$_POST['dest'];
$date=$_POST['date'];
$timed=$_POST['timed'];
$tno=$_POST['tno'];
$class=$_POST['class'];
$amt=$_POST['amt'];
$acnt=$_POST['accnt'];

if($acnt=='b1')
{$result = mysql_query("select * from udetails_ext_bank where uid_id='$uidd' AND id_uid='$val_1'");
$r=mysql_fetch_array($result);
$bnkaccnt=$r["bankaccount"];}
else if($acnt=='b2')
{$result = mysql_query("select * from udetails_ext_bank where uid_id='$uidd' AND id_uid='$val_2'");
$r=mysql_fetch_array($result);
$bnkaccnt=$r["bankaccount"];}
else if($acnt=='b3')
{$result = mysql_query("select * from udetails_ext_bank where uid_id='$uidd' AND id_uid='$val_3'");
$r=mysql_fetch_array($result);
$bnkaccnt=$r["bankaccount"];}
else if($acnt=='c1')
{$result = mysql_query("select * from udetails_ext_credit where uid_id='$uidd' AND id_uid='$val_1'");
$r=mysql_fetch_array($result);
$bnkaccnt=$r["creditcard"];}
else if($acnt=='c2')
{$result = mysql_query("select * from udetails_ext_credit where uid_id='$uidd' AND id_uid='$val_2'");
$r=mysql_fetch_array($result);
$bnkaccnt=$r["creditcard"];}
else {
echo 'Error! Account Mismatch'; }


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
if($acnt=='b1'||$acnt=='b2'||$acnt=='b3')
{
mysql_select_db("user_db"); 
$result = mysql_query("select * from udetails_ext_bank where uid_id='$uidd' AND bankaccount='$bnkaccnt'");
$r=mysql_fetch_array($result);
$account=$r["bankaccount"];
$btype=$r["banktype"];
$name=$r["bankname"];
$amount=$r["bank_amount"];
if($amount>=$amt)
{
$amount=$amount-$amt;
$insert = "INSERT INTO udetails_travel (uid_id, type, frm, dest, date, time, tnum, class, amount, active) ".
			"VALUES ('$uidd', '$id', '$from', '$dest', '$date', '$timed', '$tno', '$class', '$amt', '$val_1')";
			$results = mysql_query($insert) or die(mysql_error());

mysql_query("UPDATE udetails_ext_bank SET bank_amount = '$amount'
WHERE uid_id = '$uidd' AND bankaccount = '$bnkaccnt'");
$data=$id;$data.=' Ticket Booked - Rs.';$data.=$amt;$data.='/- Details: ';$data.=$from;$data.=' to ';$data.=$dest;$data.=' (';$data.=$tno;$data.=') ';$data.=' Dated: ';$data.=$date;$data.=' Time: ';$data.=$timed;$data.=' from Account, ';$data.=$bnkaccnt;$data.='. Balance amount: Rs.';$data.=$amount;$data.='/-';		
$insert = "INSERT INTO udetails_log (uid_id, body) ".
			"VALUES ('$uidd', '$data')";
			$results = mysql_query($insert) or die(mysql_error()); 
			
echo 'Transaction Complete!<hr><br>',$data;

echo '<form action="book-ticket.php"><br><br><input type="submit" value="Done" class="btnuidright"></form>';
}
else
{ echo 'Cannot proceed, low account balance!';}
}
else if($acnt=='c1'||$acnt=='c2')
{
mysql_select_db("user_db"); 
$result = mysql_query("select * from udetails_ext_credit where uid_id='$uidd' AND creditcard='$bnkaccnt'");
$r=mysql_fetch_array($result);
$account=$r["creditcard"];
$valid=$r["creditvalid"];
$csv=$r["creditcsv"];
echo '<form name="cred" action="ticket-exec3.php" method="POST"><br>';
echo 'Credit Card: ',$account,'<br>Name: ',$_SESSION['SESS_FIRST_NAME'],' ',$_SESSION['SESS_LAST_NAME'],'<br>Validity: ',$valid,'<br><br>Card Confirmation:<hr>';
echo '<br><br><table><tr><td>Enter CSV: </td><td><input type="text" name="csv1" id="csv1" class="textfield"></td></tr></table>';
echo '<input type="hidden" name="accnt" id="accnt" value="',$account,'">';
echo '<input type="hidden" name="valid" id="valid" value="',$valid,'">';
echo '<input type="hidden" name="csv" id="csv" value="',$csv,'">';
echo '<input type="hidden" name="id" value="',$id,'">';
echo '<input type="hidden" name="from" value="',$from,'">';
echo '<input type="hidden" name="dest" value="',$dest,'">';
echo '<input type="hidden" name="date" value="',$date,'">';
echo '<input type="hidden" name="timed" value="',$timed,'">';
echo '<input type="hidden" name="tno" value="',$tno,'">';
echo '<input type="hidden" name="class" value="',$class,'">';
echo '<input type="hidden" name="amt" value="',$amt,'">';
echo '<br><br><input type="submit" value="Continue" class="btnuidright">';
echo '</form>';
}
else { echo 'Error in transaction.  <a href="book-ticket.php">Go back</a>'; }
mysql_close(); ?>
<br>
<br>
<br>
</div>

<div class="bigtext"><div class="boxbutton"><a href="fund-transfer.php">Fund Transfer</a></div></div></div></div>
<div class="tmsg"><br><br>Welcome to Banking Central. Control all your banking needs from here. Transfer funds, pay bills and do more with everyday banking. Banking made simple! <br> [ <?php echo date("l, F d, Y h:i" ,time());?> ]</div>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="logout.php">Logout</a></div>
</body>
</html>
