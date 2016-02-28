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
$connect = mysql_connect("localhost", "admin", "yahoo");
$pid = $_POST["pid"];
$name = $_POST["name"];
$type = $_POST["type"];
$stock = $_POST["stock"];
$rate = $_POST["rate"];
$decr = $_POST["descr"];
$url = $_POST["imgurl"];

mysql_select_db("user_db"); 
mysql_query("UPDATE udetails_shop SET pname = '$name'
WHERE uid_id = '$uidd' AND id = '$pid'");
mysql_query("UPDATE udetails_shop SET category = '$type'
WHERE uid_id = '$uidd' AND id = '$pid'");
mysql_query("UPDATE udetails_shop SET stock='$stock'
WHERE uid_id = '$uidd' AND id = '$pid'");
mysql_query("UPDATE udetails_shop SET price='$rate'
WHERE uid_id = '$uidd' AND id = '$pid'");
mysql_query("UPDATE udetails_shop SET descrpt='$decr'
WHERE uid_id = '$uidd' AND id = '$pid'");
 echo '<h2>Modified Item</h2><hr>';
echo '<img src="../uploaded_images/',$url,'" alt="',$url,'" class="imgbox"></img>';
 echo '<div class="bigtextfloat"><table><tr><td>Item: </td><td>',$name,'</td></tr>';
  echo '<tr><td>Item id#: </td><td>',$pid,'</td></tr>';
   echo '<tr><td>Category: </td><td>',$type,'</td></tr>';
    echo '<tr><td>Stock: </td><td>',$stock,'</td></tr>';
	 echo '<tr><td>Price: </td><td>',$rate,'</td></tr>';
	 echo '<tr><td>More info: </td><td>',$decr,'</td></tr></table></div>';
  echo '<form action="shop-manage.php" class="floatright"><input type="submit" value="Done" class="btnuid"></form>';
 ?>
 </div>
 </body>
</html>