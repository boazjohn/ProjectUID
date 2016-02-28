<?php

	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Citizen Details | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Item Management</h1>

<div class="bmenu"><a href="member-index.php">Home</a> |  <a href="add-item.php">Add Item</a> |  <a href="shop-manage.php">Manage Items</a> | <a href="logout.php">Logout</a></div>
<div class="tspacemid">

<?php
$uidd = $_SESSION['SESS_MEMBER_ID'];
$count=0;
$connect = mysql_connect("localhost", "admin", "yahoo");
mysql_select_db("user_db"); 
$pid = $_POST["item"];
$result = mysql_query("select * from udetails_shop where uid_id='$uidd' && id='$pid'");
$r=mysql_fetch_array($result);
$name = $r["pname"];
$type = $r["category"];
$stock = $r["stock"];
$rate = $r["price"];
$decr = $r["descrpt"];
$url = $r["imgurl"];

echo '<img src="../uploaded_images/',$url,'" alt="',$url,'" class="imgbox"></img>';
 echo '<div class="bigtextfloat"><table><tr><td>Item: </td><td>',$name,'</td></tr>';
  echo '<tr><td>Item id#: </td><td>',$pid,'</td></tr>';
   echo '<tr><td>Category: </td><td>',$type,'</td></tr>';
    echo '<tr><td>Stock: </td><td>',$stock,'</td></tr>';
	 echo '<tr><td>Price: </td><td>',$rate,'</td></tr>';
	 echo '<tr><td>More info: </td><td>',$decr,'</td></tr></table></div>';
  echo '<form action="del-exec.php" method="POST" class="floatright"><input type="hidden" value="',$pid,'" name="pid"><input type="submit" value="Delete" class="btnuid"></form>';

 ?>

 </div>
 </body>
</html>