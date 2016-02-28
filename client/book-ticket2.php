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
<form name="ticket2" action="ticket-exec.php" method="POST">
<table>
<?php 
$mode=$_POST["mode"];
echo $mode,' Ticket Booking<hr><br>';
?>
<input type="hidden" name="mode" id="mode" value="<?php echo $mode; ?>">
<tr><td class="formfieldright">From :</td><td><input type="text" name="from" id="from" class="textfield3"></td></tr>
<tr><td class="formfieldright">Destination :</td><td><input type="text" name="dest" id="dest" class="textfield3"></td></tr>
<tr><td class="formfieldright">Date :</td><td>
<select id="dd" name="dd" class="textfield2"><option value="" selected>DD</option>
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
	</select><select id="mm" name="mm" class="textfield2">
	<option value="" selected>MM</option>
	<option value="01" >January</option>
	<option value="02" >February</option>
	<option value="03" >March</option>
	<option value="04" >April</option>
	<option value="05" >May</option>
	<option value="06" >June</option>
	<option value="07" >July</option>
	<option value="08" >August</option>
	<option value="09" >September</option>
	<option value="10" >October</option>
	<option value="11" >November</option>
	<option value="12" >December</option>
	</select><select id="yyyy" name="yyyy" class="textfield">
	<option value="" selected>YYYY</option>
	<option value="2010" >2010</option>
	<option value="2011" >2011</option>
	<option value="2012" >2012</option>
	<option value="2013" >2013</option>
	<option value="2014" >2014</option>
	<option value="2015" >2015</option>
	<option value="2016" >2016</option>
	<option value="2017" >2017</option>
	<option value="2018" >2018</option>
	<option value="2019" >2019</option>
	<option value="2020" >2020</option>
	<option value="2021" >2021</option>
	<option value="2022" >2022</option>
	<option value="2023" >2023</option>
	<option value="2024" >2024</option>
	<option value="2025" >2025</option>
	<option value="2026" >2026</option>
	<option value="2027" >2027</option>
	<option value="2028" >2028</option>
	<option value="2029" >2029</option>
	<option value="2030" >2030</option>
	</select>
</td></tr>
<tr><td class="formfieldright">Time (hrs) :</td><td><input type="text" value="00" name="hrs1" id="hrs1" class="textfield5">:<input type="text" value="00" name="hrs2" id="hrs2" class="textfield5"></td></tr>
<?php if($mode=='Bus')
{
?>
<tr><td class="formfieldright">Bus No / Name :</td><td><input type="text" name="tno" id="tno" class="textfield3"></td></tr>

<tr><td class="formfieldright">Class :</td><td>
<select id="class" name="class" class="textfield4">
	<option value="" selected>--Select--</option>
	<option value="Economy" >Economy</option>
	<option value="Business" >Business</option>
	<option value="First Class" >First Class</option>
	</select>
</td></tr>
<?php }
else if($mode=='Railway')
{
 ?>
<tr><td class="formfieldright">Train No :</td><td><input type="text" name="tno" id="tno" class="textfield3"></td></tr>
<tr><td class="formfieldright">Class :</td><td>
<select id="class" name="class" class="textfield4">
	<option value="" selected>--Select--</option>
	<option value="Sleeper" >Sleeper</option>
	<option value="AC Tier III" >AC Tier III</option>
	<option value="AC Tier II" >AC Tier II</option>
		<option value="AC Tier I" >AC Tier I</option>
	</select>
</td></tr>
<?php 
}
else if($mode=='Airplane')
{ ?>
<tr><td class="formfieldright">Plane No / Name :</td><td><input type="text" name="tno" id="tno" class="textfield3"></td></tr>
<tr><td class="formfieldright">Class :</td><td>
<select id="class" name="class" class="textfield4">
	<option value="" selected>--Select--</option>
	<option value="Economy" >Economy</option>
	<option value="Business" >Business</option>
	<option value="First Class" >First Class</option>
	</select>
</td></tr>
<?php } ?>
 
</table><br><br><input type="submit" name="submit" value="Continue" class="btnuidright">
</div>
<div class="boxbutton"><a href="book-ticket.php">Book Ticket</a></div><br><br>


</div></div>
<div class="tmsg"><br><br>Welcome to Unique ID Citizen Control Panel. [ <?php echo date("l, F d, Y h:i" ,time());?> ]</div>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="logout.php">Logout</a></div>
</body>
</html>
