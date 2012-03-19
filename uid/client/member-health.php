<?php
	require_once('auth.php');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Health | UID</title>
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

		$uidd = $_SESSION['SESS_MEMBER_ID'];
//select which database you want to edit


mysql_select_db("user_db"); 
$result1 = mysql_query("select * from udetails_ext1 where uid_id='$uidd'");
$results = mysql_query($query);
$r1=mysql_fetch_array($result1);

$prof=$r1['profession'];

//select the table

 
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

<div class="boxexpand"><div class="wrapperoverflowmargin"><div class="boxfloatbig">Click on any of the links to perform an action.<br><br>Choose Fix Appointment To Fix An Appointment With A Doctor. <br><br>Choose List The Hospitals To List Hospitals. <br><br>Choose Ask A Doctor To Clear Your Doubts About Any Disease.<br></div>

<div class="bigtext"><div class="boxbutton"><a href="fix-appoinment.php">Fix An Appointment</a></div><br><div class="boxbutton"><?php 	if($prof=='Doctor'){	echo '<a href="reply.php">Reply To Queries</a><br>'; echo	'<a href="appoinments.php">Appoinments</a></div><br>';}	?><div class="boxbutton"><a href="ask-doc.php">Ask A Doctor</a></div><br></div></div></div></div>

<div class="bmenu"><a href="member-index.php">Home</a> | <a href="logout.php">Logout</a></div>
</body><div class="tmsg"><br><br>Welcome to Health Central.<br> [ <?php echo date("l, F d, Y h:i" ,time());?> ]</div>
</html>
