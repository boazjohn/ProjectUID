<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Answers | UID</title>
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

$quesd=$_POST['ques'];
$delete="DELETE FROM doc_ques
					WHERE question= '$quesd'
					LIMIT 1";
					$results = mysql_query($delete) or die(mysql_error());
?>

<div class="boxexpand"><div class="wrapperoverflowmargin"><div class="boxfloatbig">


</h3>Answers</h3><hr>

<?php 

mysql_select_db("user_db");

	$uidd = $_SESSION['SESS_MEMBER_ID'];
	
	
$result = mysql_query("SELECT * FROM doc_ques where user_id='$uidd'");

	$results = mysql_query($query);

while($r=mysql_fetch_array($result))
{	
   //the format is $variable = $r["nameofmysqlcolumn"];
$ques=$r['question'];
$desc=$r['description'];
$rep=$r['reply'];
$status=$r['status'];

echo 'Question:',$ques,'<br><br>';
echo 'Description:',$desc,'<br><br>';
if($status=='yes'){
echo 'Reply:',$rep,'&nbsp;&nbsp;&nbsp;&nbsp;';
}
else
{
echo "Reply: No reply yet.";
}
echo '<form action="answers.php" method="post">';
echo '<input type="hidden"  name="ques" value="',$ques,'">';
echo '<br><input type="submit" name="add" value="Delete" class="btnuid"><br><br><br><br></form>';
}


?>

</div>

<div class="bigtext"><div class="boxbutton"><a href="ask-doc.php">Ask A Doctor</a></div></div><br><br>
<div class="bigtext"><div class="boxbutton"><a href="answers.php">Answers</a></div></div></div></div>
<div class="tmsg"><br><br>Welcome to Banking Central. Control all your banking needs from here. Transfer funds, pay bills and do more with everyday banking. Banking made simple! <br> [ <?php echo date("l, F d, Y h:i" ,time());?> ]</div>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="logout.php">Logout</a></div>
</body>
</html>
