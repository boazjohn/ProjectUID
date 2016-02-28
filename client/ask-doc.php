<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ask Doctor | UID</title>
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
<form name="formbill" action="sub-query.php" method="POST">
<h3>Ask Doctor</h3><hr>
<table><tr><td class="formfieldleft">Select A Doctor : <select id="uid" name="uid" class="textfield"><option value="" selected>-- Select a Doctor --</option>

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
</td></tr>
<tr><td class="formfieldleft">Question: <input type="text" id="ques" name="ques" class="textfield6"></td></tr>
<tr><td class="formfieldleft">Description:<br> <textarea name="desc" class="textarea"></textarea></td></tr>
<tr><td align="right"><input type="submit" name="submit" value="Continue" class="btnuidright"></td></tr>
</table></form></div>

<div class="bigtext"><div class="boxbutton"><a href="ask-doc.php">Ask A Doctor</a></div><br>
<div class="boxbutton"><a href="answers.php">Answers</a></div></div></div></div></div>

<div class="tmsg"><br><br>Welcome to Banking Central. Control all your banking needs from here. Transfer funds, pay bills and do more with everyday banking. Banking made simple! <br> [ <?php echo date("l, F d, Y h:i" ,time());?> ]</div>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="logout.php">Logout</a></div>
</body>
</html>
