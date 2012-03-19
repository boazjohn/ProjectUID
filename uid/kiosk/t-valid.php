<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrator Index</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Welcome ticket <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="logout.php">Logout</a></div>
<div class="tspacemid">
<br><br>
<?php //connect to mysql
mysql_connect("localhost","admin","yahoo"); 
	
//select which database you want to edit
mysql_select_db("user_db"); 

//select the table
$val_1=1;
$val_0=0;
$count=0;
$uid=md5($_POST["uid"]);


$result = mysql_query("select * from udetails_img where uid_id='$uid'");
	$r=mysql_fetch_array($result);
	$id=$r["pid"];
	$url=$r["imgurl"];
	
echo '<form name="ticketvalid" action="t-valid2.php" method="POST">';
$result = mysql_query("select * from udetails_travel order by id");
while($r=mysql_fetch_array($result))
{	
   //the format is $variable = $r["nameofmysqlcolumn"];
     
$id=$r["id"];
$uid_id=$r["uid_id"];	 
$frm=$r["frm"];
$dest=$r["dest"];
$date=$r["date"];
$timed=$r["time"];
$tno=$r["tnum"];
$class=$r["class"];
$active=$r["active"];
$type=$r["type"];
$amt=$r["amount"];



if($uid==$uid_id && $active==$val_1)
{
if($type=="Bus")
{

echo '<div class="bordertext">';
echo '<img src="../uploaded_images/',$url,'" alt="',$id,'" class="imgbox"></img><br>';
echo '<input type="radio" name="id" value="',$id,'"checked>','<b>Booked Bus Ticket</b><br><br>Dated: ',$date,'<br><br>Time: ',$timed,'<br><br>From: ',$frm,'<br><br>Destination: ',$dest,'<br><br>Tno: ',$tno,'<br><br>Class: ',$class,'<br><br>Amount (INR): ',$amt,'</div>';
}
if($type=="Railway")
{
echo '<div class="bordertext">';
echo '<img src="../uploaded_images/',$url,'" alt="',$id,'" class="imgbox"></img><br>';
echo '<input type="radio" name="id" value="',$id,'"checked>','<b>Booked Railway Ticket</b><br><br>Dated: ',$date,'<br><br>Time: ',$timed,'<br><br>From: ',$frm,'<br><br>Destination: ',$dest,'<br><br>Tno: ',$tno,'<br><br>Class: ',$class,'<br><br>Amount (INR): ',$amt,'</div>';
}
if($type=="Airplane")
{
echo '<div class="bordertext">';
echo '<img src="../uploaded_images/',$url,'" alt="',$id,'" class="imgbox"></img><br>';
echo '<input type="radio" name="id" value="',$id,'"checked>','<b>Booked Airplane Ticket</b><br><br>Dated: ',$date,'<br><br>Time: ',$timed,'<br><br>From: ',$frm,'<br><br>Destination: ',$dest,'<br><br>Tno: ',$tno,'<br><br>Class: ',$class,'<br><br>Amount (INR): ',$amt,'</div>';
}
$count++;
}
}
if($count==0)
{
echo "No tickets booked!";
}
echo '<br><br><input type="submit" name="submit" value="Validate Ticket" class="btnuidright">';
echo '</form>';
?>


</div>
</body>
</html>

