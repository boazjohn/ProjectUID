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
$id=$_POST['mode'];	
$from=$_POST['from'];
$dest=$_POST['dest'];
$date=$_POST['dd'];
$date.='-';
$date.=$_POST['mm'];
$date.='-';
$date.=$_POST['yyyy'];
$timed=$_POST['hrs1'];
$timed.=':';
$timed.=$_POST['hrs2'];
$tno=$_POST['tno'];
$class=$_POST['class'];
$amt=getAmount("$id","$class");

function getAmount($mode,$class)
{
if($mode=='Bus')
{
$amt+=10;
if($class=='Economy')
{
$a=rand(1,100);$amt+=$a;
}
else if($class=='Business')
{
$a+=rand(100,400);$amt+=$a;
}
else if($class=='First Class')
{
$a+=rand(400,1000);$amt+=$a;
}}
else if($mode=='Railway')
{
$amt+=40;
if($class=='Sleeper')
{
$a+=rand(1,300);$amt+=$a;
}
else if($class=='AC Tier III')
{
$a+=rand(300,600);$amt+=$a;
}
else if($class=='AC Tier II')
{
$a+=rand(600,1500);$amt+=$a;
}
else if($class=='AC Tier I')
{
$a+=rand(1500,3000);$amt+=$a;
}
}
else if($mode=='Airplane')
{
$amt+=1000;
if($class=='Economy')
{
$a+=rand(1000,3000);$amt+=$a;
}
else if($class=='Business')
{
$a+=rand(3000,6000);$amt+=$a;
}
else if($class=='First Class')
{
$a+=rand(6000,10000);$amt+=$a;
}}
return $amt;
}

mysql_connect("localhost","admin","yahoo"); 

		
$val_0=0;
$val_1=1;
$val_2=2;
$val_3=3;
$val_amt=10000;
	

//select which database you want to edit
mysql_select_db("user_db"); 
$uidd = $_SESSION['SESS_MEMBER_ID'];
//select the table
$result = mysql_query("select * from udetails_ext where uid_id='$uidd'");
$r=mysql_fetch_array($result);
$bid1=$r["bid_1"];
$bid2=$r["bid_2"];
$bid3=$r["bid_3"];

$result = mysql_query("select * from udetails_ext where uid_id='$uidd'");
$r=mysql_fetch_array($result);
$cid1=$r["cid_1"];
$cid2=$r["cid_2"];


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
<form name="form0" action="ticket-exec2.php" method="POST">
<?php 
if(empty($id))
{ echo 'Error in transaction.'; }
else
{
echo '<input type="hidden" name="id" value="',$id,'">';
echo '<input type="hidden" name="from" value="',$from,'">';
echo '<input type="hidden" name="dest" value="',$dest,'">';
echo '<input type="hidden" name="date" value="',$date,'">';
echo '<input type="hidden" name="timed" value="',$timed,'">';
echo '<input type="hidden" name="tno" value="',$tno,'">';
echo '<input type="hidden" name="class" value="',$class,'">';
echo '<input type="hidden" name="amt" value="',$amt,'">';

echo 'Ticket Cost: Rs.',$amt,'<br><br>Select payment method:<hr><br><br>Online Banking:<br><br>';
if($bid1!=0||$bid2!=0||$bid2!=0)
{
if($bid1!=0)
{$result = mysql_query("select * from udetails_ext_bank where uid_id='$uidd' AND id_uid='$val_1'");
$r=mysql_fetch_array($result);
$account=$r["bankaccount"];
$type=$r["banktype"];
$name=$r["bankname"];
echo '<input type="radio" name="accnt" value="b1"checked> ',$account,' (',$type,')','<br><br>';}

if($bid2!=0)
{$result = mysql_query("select * from udetails_ext_bank where uid_id='$uidd' AND id_uid='$val_2'");
$r=mysql_fetch_array($result);
$account=$r["bankaccount"];
$type=$r["banktype"];
$name=$r["bankname"];
echo '<input type="radio" name="accnt" value="b2"> ',$account,' (',$type,')','<br><br>';}

if($bid3!=0)
{$result = mysql_query("select * from udetails_ext_bank where uid_id='$uidd' AND id_uid='$val_3'");
$r=mysql_fetch_array($result);
$account=$r["bankaccount"];
$type=$r["banktype"];
$name=$r["bankname"];
echo '<input type="radio" name="accnt" value="b3"> ',$account,' (',$type,')','<br>';}
}
else { echo 'Error! No Accounts.'; }
echo '<br><br><hr><br><br>Credit Card:<br><br>';
if($cid1!=0)
{$result = mysql_query("select * from udetails_ext_credit where uid_id='$uidd' AND id_uid='$val_1'");
$r=mysql_fetch_array($result);
$account=$r["creditcard"];
$type=$r["creditvalid"];
echo '<input type="radio" name="accnt" value="c1"> ',$account,' Validity: ',$type,'<br><br>';}

if($cid2!=0)
{$result = mysql_query("select * from udetails_ext_credit where uid_id='$uidd' AND id_uid='$val_2'");
$r=mysql_fetch_array($result);
$account=$r["creditcard"];
$type=$r["creditvalid"];
echo '<input type="radio" name="accnt" value="c2"> ',$account,' Validity: ',$type,'<br><br>';}

}

?>
<br><br>
<input type="submit" name="submit" value="Continue" class="btnuidright">
</form>
</div>

<div class="bigtext"><div class="boxbutton"><a href="book-ticket.php">Book Ticket</a></div></div></div></div>
<div class="tmsg"><br><br>Welcome to Banking Central. Control all your banking needs from here. Transfer funds, pay bills and do more with everyday banking. Banking made simple! <br> [ <?php echo date("l, F d, Y h:i" ,time());?> ]</div>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="logout.php">Logout</a></div>
</body>
</html>
