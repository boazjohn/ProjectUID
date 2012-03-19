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

 ?>
<form name="form2" method="post" action="edit-exec.php">
<input type="hidden" name="imgurl" value="<?php echo $url; ?>">
<table>
 <tr><td class="formfieldright">Item id# </td><td><input type="text" name="pid" value="<?php echo $pid; ?>" class="textfield" readonly></td></tr>
 <tr><td class="formfieldright">Item Name </td><td><input type="text" name="name" value="<?php echo $name; ?>" class="textfield"></td></tr>
 <tr><td class="formfieldright">Category </td><td><input type="text" name="type" value="<?php echo $type; ?>" class="textfield"></td></tr>
 <tr><td class="formfieldright">Stock </td><td><input type="text" name="stock" value="<?php echo $stock; ?>" class="textfield"></td></tr>
 <tr><td class="formfieldright">Price </td><td><input type="text" name="rate" value="<?php echo $rate; ?>" class="textfield"></td></tr>
 <tr><td class="formfieldright">Comments </td><td><textarea name="descr" id="descr" class="textfield"><?php echo $decr; ?></textarea></td></tr>
  <tr><td></td><td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" value="Add Item" name="add" class="btnuid"></td></tr> 
 </table></form>
 </div>
 </div>
 </body>
</html>