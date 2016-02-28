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

<div class="tspace"><div class="borderbox">
<h2>For Sale</h2><hr>
<?php
$uidd = $_SESSION['SESS_MEMBER_ID'];
$count=0;
$connect = mysql_connect("localhost", "admin", "yahoo");
mysql_select_db("user_db"); 
$result = mysql_query("select * from udetails_shop where uid_id='$uidd'");
while($r=mysql_fetch_array($result))
{
$pid = $r["id"];
$name = $r["pname"];
$type = $r["category"];
$stock = $r["stock"];
$rate = $r["price"];
$decr = $r["descrpt"];
$url = $r["imgurl"];

if($count==0)
{$count=1;
echo '<table><tr><td>';
echo '<table class="odd"><tr><td></td><td><img src="../uploaded_images/',$url,'" alt="',$url,'" class="imgbox"></img></td></tr>';
echo '<tr><td>Item: </td><td>',$name,'</td></tr>';
  echo '<tr><td>Item id#: </td><td>',$pid,'</td></tr>';
   echo '<tr><td>Category: </td><td>',$type,'</td></tr>';
     if($stock>0) {
    echo '<tr><td>Stock: </td><td>',$stock,'</td></tr>'; } else {
	echo '<tr><td>Stock: </td><td><div class="err">OUT OF STOCK</div></td></tr>';}
	 echo '<tr><td>Price: </td><td>',$rate,'</td></tr>';
	 echo '<tr><td>More info: </td><td>',$decr,'</td></tr>';
	 echo '<tr><td><form action="edit-item.php" method="POST"><input type="hidden" name="item" value="',$pid,'"><input type="submit" value=" " title="Edit" class="btnedit"></form></td><td><form action="delete-item.php" method="POST"><input type="hidden" name="item" value="',$pid,'"><input type="submit" value=" " title="Delete" class="btndel"></form></td></tr>';
	 echo'</table>';
	 
}
else if($count==1)
{$count=2;
echo '</td><td>';
echo '<table class="even"><tr><td></td><td><img src="../uploaded_images/',$url,'" alt="',$url,'" class="imgbox"></img></td></tr>';
echo '<tr><td>Item: </td><td>',$name,'</td></tr>';
  echo '<tr><td>Item id#: </td><td>',$pid,'</td></tr>';
   echo '<tr><td>Category: </td><td>',$type,'</td></tr>';
      if($stock>0) {
    echo '<tr><td>Stock: </td><td>',$stock,'</td></tr>'; } else {
	echo '<tr><td>Stock: </td><td><div class="err">OUT OF STOCK</div></td></tr>';}
	 echo '<tr><td>Price: </td><td>',$rate,'</td></tr>';
	 echo '<tr><td>More info: </td><td>',$decr,'</td></tr>';
	 echo '<tr><td><form action="edit-item.php" method="POST"><input type="hidden" name="item" value="',$pid,'"><input type="submit" value=" " title="Edit" class="btnedit"></form></td><td><form action="delete-item.php" method="POST"><input type="hidden" name="item" value="',$pid,'"><input type="submit" value=" " title="Delete" class="btndel"></form></td></tr>';
	 echo'</table>';
}
else if($count==2)
{$count=3;
echo '</td><td>';
echo '<table class="odd"><tr><td></td><td><img src="../uploaded_images/',$url,'" alt="',$url,'" class="imgbox"></img></td></tr>';
echo '<tr><td>Item: </td><td>',$name,'</td></tr>';
  echo '<tr><td>Item id#: </td><td>',$pid,'</td></tr>';
   echo '<tr><td>Category: </td><td>',$type,'</td></tr>';
     if($stock>0) {
    echo '<tr><td>Stock: </td><td>',$stock,'</td></tr>'; } else {
	echo '<tr><td>Stock: </td><td><div class="err">OUT OF STOCK</div></td></tr>';}
	 echo '<tr><td>Price: </td><td>',$rate,'</td></tr>';
	 echo '<tr><td>More info: </td><td>',$decr,'</td></tr>';
	 echo '<tr><td><form action="edit-item.php" method="POST"><input type="hidden" name="item" value="',$pid,'"><input type="submit" value=" " title="Edit" class="btnedit"></form></td><td><form action="delete-item.php" method="POST"><input type="hidden" name="item" value="',$pid,'"><input type="submit" value=" " title="Delete" class="btndel"></form></td></tr>';
	 echo'</table>';
}

else if($count==3)
{$count=0;
echo '</td><td>';
echo '<table class="even"><tr><td></td><td><img src="../uploaded_images/',$url,'" alt="',$url,'" class="imgbox"></img></td></tr>';
echo '<tr><td>Item: </td><td>',$name,'</td></tr>';
  echo '<tr><td>Item id#: </td><td>',$pid,'</td></tr>';
   echo '<tr><td>Category: </td><td>',$type,'</td></tr>';
      if($stock>0) {
    echo '<tr><td>Stock: </td><td>',$stock,'</td></tr>'; } else {
	echo '<tr><td>Stock: </td><td><div class="err">OUT OF STOCK</div></td></tr>';}
	 echo '<tr><td>Price: </td><td>',$rate,'</td></tr>';
	 echo '<tr><td>More info: </td><td>',$decr,'</td></tr>';
	 echo '<tr><td><form action="edit-item.php" method="POST"><input type="hidden" name="item" value="',$pid,'"><input type="submit" value=" " title="Edit" class="btnedit"></form></td><td><form action="delete-item.php" method="POST"><input type="hidden" name="item" value="',$pid,'"><input type="submit" value=" " title="Delete" class="btndel"></form></td></tr>';
	 echo'</table>';
	 echo '</td></tr></table><hr>';
}
else {$count=0;}


	}


 
 ?>

 
 </div>
 </div>
 </body>
</html>