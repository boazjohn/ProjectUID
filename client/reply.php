<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Reply to | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="cleanValidator.js"></script>
<script language="JavaScript">  
<!--  
     function expand(param)  
    {  
        param.style.display=(param.style.display=="none")?"":"none";  
     }  
//-->  
</script>
</head>
<body>
<h1>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
<div class="smenu"><div class="spacer"> </div><div class="bank"><a href="member-banking.php"><img src="images/bank_2.png"></img></a></div><div class="spacer"></div>
<div class="market"><a href="member-market.php"><img src="images/market_2.png"></img></a></div><div class="spacer"> </div>
<div class="shop"><a href="member-shop.php"><img src="images/shop_2.png"></img></a></div><div class="spacer"> </div>
<div class="ticket"><a href="member-ticket.php"><img src="images/ticket_2.png"></img></a></div><div class="spacer"></div>
<div class="health"><a href="member-health.php"><img src="images/health_2.png"></img></a></div><div class="spacer"> </div>
</div>

<div class="bmenu"><a href="member-index.php">Home</a> | <a href="logout.php">Logout</a></div>

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
<div class="boxexpand"><div class="wrapperoverflowmargin">
<div class="bigtext"><div class="boxbutton"><a href="reply.php">Reply To Queries</a></div></div>
<div class="boxfloatbig">

<?php

mysql_select_db("user_db");

	$uidd = $_SESSION['SESS_MEMBER_ID'];
	$expa=1;
	$expand='expand';
	
	
$result = mysql_query("SELECT * FROM doc_ques where doc_id='$uidd'");

	$results = mysql_query($query);

while($r=mysql_fetch_array($result))
{	
   //the format is $variable = $r["nameofmysqlcolumn"];
$ques=$r['question'];
$desc=$r['description'];
$status=$r['status'];

if($status!='yes')
{
$expand.=$expa;
$expa+=$expa;
?>
<h3>Questions</h3><hr>
<form action="post-reply.php" method="post">
<input type="hidden" name="ques" value="<?php echo $ques; ?>">
<table><tr><td class="formfieldleft">Question: <?php echo $ques; ?></td></tr><td class="formfieldleft">Description:<?php echo $desc; ?></td></tr>
<tr><td><a href="javascript:expand(document.getElementById('<?php echo $expand; ?>'))">
<div align="right" class="bigtext">Reply<hr></div></a></td></tr></table>

<div id="<?php echo $expand; ?>" style="display:none">
<div class="more"><br><br>Reply:<td><textarea name="reply" class="textarea"></textarea>
<br><br><input type="submit" name="submit" value="Reply" class="btnuidright"></div></div>
<div class="text1">

</form>
<?php
}
}
if($expa==1)
{
echo 'No Queries for you.';
}
?></div>

</div></div>



</body>
</html>
