<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Citizen Control Panel</title>
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
	
//select which database you want to edit
mysql_select_db("user_db"); 
$uidd = $_SESSION['SESS_MEMBER_ID'];
//select the table
$result = mysql_query("select * from udetails where uid='$uidd'");
$r=mysql_fetch_array($result);
$fname=$r["first_name"];
$lname=$r["last_name"];
$dd=$r["dd"];
$mm=$r["mm"];
$yyyy=$r["yyyy"];
$sex=$r["sex"];
$add1=$r["address_line_one"];
$add2=$r["address_line_two"];
$add3=$r["address_line_three"];
$pin=$r["pincode"];
$panc=$r["panchayath"];
$tal=$r["taluk"];
$dis=$r["district"];
$state=$r["state"];
$phno=$r["phone_no"];
$email=$r["email"];
$age=$yyyy;$age.='-';$age.=$mm;$age.='-';$age.=$dd;
function getAge ($getage)
{
list($year,$month,$day) = explode("-",$getage);
$year_diff = date("Y") - $year;
$month_diff = date("m") - $month;
$day_diff = date("d") - $day;
if ($month_diff < 0) $year_diff--;
elseif (($month_diff==0) && ($day_diff < 0)) $year_diff--;
return $year_diff;
}

$result = mysql_query("SELECT tip_id FROM tip_tab order by tip_id desc limit 1");
$r=mysql_fetch_array($result);
$mid=$r["tip_id"];
$ran=rand('1',$mid);
 
$result = mysql_query("select * from tip_tab where tip_id='$ran'"); 
$r=mysql_fetch_array($result);
$tip_head=$r["tip_head"];
$tip_content=$r["tip_content"];

mysql_select_db("user_db"); 
$result = mysql_query("select * from udetails_img where uid_id='$uidd'");
	$r=mysql_fetch_array($result);
	$id=$r["pid"];
	$url=$r["imgurl"];

?>
<div class="boxexpand2"><h3>Tip Of The Day</h3><h4><?php   echo $tip_head;?></h4><?php echo $tip_content; ?></div>
<div class="boxexpand"><div class="wrapperoverflow"><div class="boxfloatbig">
<img src="../uploaded_images/<?php echo $url; ?>" alt="<?php echo $id; ?>" class="imgbox"></img>
<table><?php echo '<tr><td class="formfieldright5padding">Name:</td><td>',$fname,' ',$lname, '</td></tr><tr><td class="formfieldright5padding">Date Of Birth:</td><td>',$dd,'-',$mm,'-',$yyyy,' (',getAge("$age"),')</td></tr><tr><td class="formfieldright5padding">Sex:</td><td>',$sex,'</td></tr><tr><td class="formfieldright5padding">Address:</td><td>',$add1,'</td></tr><tr><td></td><td>',$add2,'</td></tr><tr><td></td><td>',$add3,'</td></tr><tr><td class="formfieldright5padding">Pincode:</td><td>',$pin, '</td></tr><tr><td class="formfieldright5padding">Panchayath:</td><td>',$panc, '</td></tr><tr><td class="formfieldright5padding">Taluk:</td><td>',$tal, '</td></tr><tr><td class="formfieldright5padding">District:</td><td>',$dis, '</td></tr><tr><td class="formfieldright5padding">State:</td><td>',$state, '</td></tr><tr><td class="formfieldright5padding">Phone:</td><td>',$phno, '</td></tr><tr><td class="formfieldright5padding">email:</td><td>',$email; ?></table></div><div class="bigtextjustify">Welcome To Citizen Control Panel. Meet all your everyday needs. Click on a menu from the left to being. Banking - Market - Shopping - Tickets - Health</div></div></div>
<div class="tmsg"><br><br>Welcome to Unique ID Citizen Control Panel. [ <?php echo date("l, F d, Y h:i" ,time());?> ]</div>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="logout.php">Logout</a></div>
</body>
</html>
