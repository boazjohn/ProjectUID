<?php

	require_once('../auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Citizen Details | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Add Citizen Details</h1>

<div class="bmenu"><a href="../member-index.php">Home</a> | <a href="../add-user.php">Create New UID</a> | <a href="../list-data.php">List UID</a> | <a href="../edit.php">Edit UID</a> | <a href="../manage.php">Manage Portal</a> | <a href="../logout.php">Logout</a></div>
<div class="tspacemid">

<?php
$connect = mysql_connect("localhost", "admin", "yahoo");
 	mysql_select_db("user_data"); 
	$result = mysql_query("select * from udetails ORDER BY id DESC LIMIT 1");
	$r=mysql_fetch_array($result);	
    $uid=$r["uid"];
	$result = mysql_query("select * from udetails_img where uid_id='$uid'");
	$r=mysql_fetch_array($result);
	$id=$r["pid"];
	$url=$r["imgurl"];
	
	mysql_select_db("user_db"); 
$uidd = md5($uid);
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

 ?>
<h2>Successfully Added to Database</h2><hr><br><br>
<div class="bigtextfloat">
<div class="card"><img src="images/cardw.png"></img>
<div class="cardtext"><?php echo '',$fname,' ',$lname,'<br><br>#',rand(10000,999999); ?></div>
<img src="../../uploaded_images/<?php echo $url; ?>" alt="<?php echo $id; ?>" class="imgbox2"></img>
</div><br><br><br><br>
<h3>Details</h3><hr>
<table><?php echo '<tr><td class="formfieldright5padding">Name:</td><td>',$fname,' ',$lname, '</td></tr><tr><td class="formfieldright5padding">Date Of Birth:</td><td>',$dd,'-',$mm,'-',$yyyy,' (',getAge("$age"),')</td></tr><tr><td class="formfieldright5padding">Sex:</td><td>',$sex,'</td></tr><tr><td class="formfieldright5padding">Address:</td><td>',$add1,'</td></tr><tr><td></td><td>',$add2,'</td></tr><tr><td></td><td>',$add3,'</td></tr><tr><td class="formfieldright5padding">Pincode:</td><td>',$pin, '</td></tr><tr><td class="formfieldright5padding">Panchayath:</td><td>',$panc, '</td></tr><tr><td class="formfieldright5padding">Taluk:</td><td>',$tal, '</td></tr><tr><td class="formfieldright5padding">District:</td><td>',$dis, '</td></tr><tr><td class="formfieldright5padding">State:</td><td>',$state, '</td></tr><tr><td class="formfieldright5padding">Phone:</td><td>',$phno, '</td></tr><tr><td class="formfieldright5padding">email:</td><td>',$email; ?></table>
<form action="../member-index.php"><input type="submit" value="Done" class="btnuidright"></form>
</div>
</div>



 </body>
</html>
  