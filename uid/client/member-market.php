<?php

	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Share Market | UID</title>
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

<div class="bmenu"><a href="member-index.php">Home</a> | <a href="market-log.php">Share Market Logs</a> | <a href="logout.php">Logout</a></div>
<div class="boxexpand">
<div class="wrapperoverflow">
<h2>Share Market</h2><hr>
<div class="shareview">

<img src="images/market-back.jpg"></img>
<div class="sharetext">
<?php 

//create database
$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_db") or die(mysql_error());
mysql_select_db("user_db");
echo '<marquee direction="left" onmouseover="this.stop()" scrollamount="6" onmouseout="this.start()" height="40px">';
$result = mysql_query("select * from udetails_share order by id");
while($r=mysql_fetch_array($result)) 
{
$name=$r["name"];
$val=$r["value"];
$pval=$r["pvalue"];
if($pval!=0)
{
$perc=($val/$pval)/100; }
else {
$perc=$val/100;
}
if($val>$pval)
{
echo $name,': ';
echo '<span class="greenb">';
echo $val,'(+',round($perc,2),'%) <img src="images/up.png"></img>  ';
echo '</span> &#149; ';
}
else if($val<$pval)
{
echo $name,': ';
echo '<span class="redb">';
echo $val,'(-',round($perc,2),'%) <img src="images/down.png"></img>  ';
echo '</span> &#149; ';
}
else
{
echo $name,': ';
echo '<span class="redb">';
echo $val,'(0.00%) <img src="images/still.png"></img>  ';
echo '</span> &#149; ';
}
}
echo '</marquee>';

?>


</div>
</div>

<h3>Buy Shares</h3><hr>
<table><form action="buy-share.php" method="POST">
<?php
	mysql_connect("localhost","admin","yahoo"); 
	
//select which database you want to edit
mysql_select_db("user_db"); 
//select the table

?>
<tr><td class="formfieldright">Select Share: </td><td>

<?php 
echo ' <select name="ide" id="ide" class="textfield6">';
$result = mysql_query("select * from udetails_share order by id");
while($r=mysql_fetch_array($result)) 
{
$name=$r["name"];
$val=$r["value"];
$id=$r["id"];

echo '<option value="',$id,'">Share: ',$name,' | Current value: ',$val,'</option>';
}
echo '</select>';
 ?>
</td>
<td class="formfieldright"> x Quantity: </td><td><input type="text" name="num" id="num" class="textfield1"></td></tr>
<tr height="70" align="right"><td></td><td></td><td></td><td><input type="submit" name="submit" value="Buy" class="btnuid"></td></tr>
</table></form>
</div>
</div>



 </body>
</html>