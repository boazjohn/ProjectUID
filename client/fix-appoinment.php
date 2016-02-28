<?php
	require_once('auth.php');
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Fix Appointment | UID</title>
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
 mysql_select_db("user_db");

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
<h3>Fix an Appointment</h3><hr>
<form name="formbill" action="sub-appnmnt.php" method="POST">

<table><tr><td class="formfieldright">Select A Doctor : <select id="uid" name="uid" class="textfield"><option value="" selected>-- Select a Doctor --</option>

<?php 


$result = mysql_query("select * from doctor_db order by id");

	$results = mysql_query($query);

while($r=mysql_fetch_array($result))
{	
   //the format is $variable = $r["nameofmysqlcolumn"];
     
$uidd = $r["uid_id"];	 

$qry="SELECT * FROM udetails where uid='$uidd'";
$result1 = mysql_query($qry);
$r1=mysql_fetch_array($result1);
$first_name=$r1['first_name'];
$last_name=$r1["last_name"];

echo '<option name="uid" value="',$uidd,'">',$first_name,' ',$last_name, '</option>';
}
echo $uidd;

?>
</td></tr></table>
<table><br><td class="formfieldright">Time :
<select id="time" name="time" class="textfield">
<option value="" selected>--time--</option>
	<option value="9:00 AM" >9:00 AM</option>
	<option value="10:00 AM">10:00 AM</option>
	<option value="11:00 AM" >11:00 AM</option>
	<option value="12:00 AM" >12:00 AM</option>
	<option value="4:00 PM" >4:00 PM</option>
	<option value="5:00 PM" >5:00 PM</option>
	<option value="6:00 PM" >6:00 PM</option>
	<option value="7:00 PM" >7:00 PM</option>
	<option value="8:00 PM" >8:00 PM</option>
<td class="formfieldright">Date :
<select id="dd" name="dd" class="textfield">
	<option value="" selected>DD</option>
	<option value="01" >01</option>
	<option value="02" >02</option>
	<option value="03" >03</option>
	<option value="04" >04</option>
	<option value="05" >05</option>
	<option value="06" >06</option>
	<option value="07" >07</option>
	<option value="08" >08</option>
	<option value="09" >09</option>
	<option value="10" >10</option>
	<option value="11" >11</option>
	<option value="12" >12</option>
	<option value="13" >13</option>
	<option value="14" >14</option>
	<option value="15" >15</option>
	<option value="16" >16</option>
	<option value="17" >17</option>
	<option value="18" >18</option>
	<option value="19" >19</option>
	<option value="20" >20</option>
	<option value="21" >21</option>
	<option value="22" >22</option>
	<option value="23" >23</option>
	<option value="24" >24</option>
	<option value="25" >25</option>
	<option value="26" >26</option>
	<option value="27" >27</option>
	<option value="28" >28</option>
	<option value="29" >29</option>
	<option value="30" >30</option>
	<option value="31" >31</option>
	</select>
	<select id="mm" name="mm" class="textfield">
	<option value="" selected>MM</option>
	<option value="January" >January</option>
	<option value="February" >February</option>
	<option value="March" >March</option>
	<option value="April" >April</option>
	<option value="May" >May</option>
	<option value="June" >June</option>
	<option value="July" >July</option>
	<option value="August" >August</option>
	<option value="September" >September</option>
	<option value="October" >October</option>
	<option value="November" >November</option>
	<option value="December" >December</option>
	</select>
	<select id="yyyy" name="yyyy" class="textfield">
	<option value="2010" selected>2010</option>
	</select></td>
</table><input type="submit" name="submit" value="Continue" class="btnuidright"></div>
</form>

<div class="bigtext"><div class="boxbutton"><a href="fix-appoinment.php">Fix an Appointment</a></div></div>
<br><br><div class="bigtext"><div class="boxbutton"><a href="fixd-appoinments.php">Appointments</a></div></div></div></div>

<div class="tmsg"><br><br>Welcome to Banking Central. Control all your banking needs from here. Transfer funds, pay bills and do more with everyday banking. Banking made simple! <br> [ <?php echo date("l, F d, Y h:i" ,time());?> ]</div>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="logout.php">Logout</a></div>
</body>
</html>
