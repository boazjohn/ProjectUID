<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Book Ticket | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Ticket Booking</h1>
<div class="smenu"><div class="spacer"> </div><div class="bank"><a href="member-banking.php"><img src="images/bank_2.png"></img></a></div><div class="spacer"></div>
<div class="market"><a href="member-market.php"><img src="images/market_2.png"></img></a></div><div class="spacer"> </div>
<div class="shop"><a href="member-shop.php"><img src="images/shop_2.png"></img></a></div><div class="spacer"> </div>
<div class="ticket"><a href="member-ticket.php"><img src="images/ticket_2.png"></img></a></div><div class="spacer"></div>
<div class="health"><a href="member-health.php"><img src="images/health_2.png"></img></a></div><div class="spacer"> </div>
</div>

<?php 
mysql_connect("localhost","admin","yahoo"); 
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
<div class="boxexpand"><div class="wrapperoverflow">
<div class="boxfloatbig">
<h3>Book Ticket</h3><hr>
<form name="ticket" action="book-ticket2.php" method="POST">
<table>
<tr><td class="formfieldright">Select Mode :</td><td><select id="mode" name="mode" class="textfield">
	<option value="" selected>-- Select One --</option>
	<option value="Bus" >Bus</option>
	<option value="Railway" >Railway</option>
	<option value="Airplane" >Airplane</option></select>
		</td></tr>
		
</table><br><br><input type="submit" name="submit" value="Continue" class="btnuidright">
</div>
<div class="boxbutton"><a href="book-ticket.php">Book Ticket</a></div><br><br>


</div></div>
<div class="tmsg"><br><br>Welcome to Unique ID Citizen Control Panel. [ <?php echo date("l, F d, Y h:i" ,time());?> ]</div>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="logout.php">Logout</a></div>
</body>
</html>
