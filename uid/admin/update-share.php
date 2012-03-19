<?php
	require_once('auth.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Share updation| UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="cleanValidator.js">
</script>
</head>
<body>
<h1>Citizen Portal Management</h1>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="add-user.php">Create New UID</a> | <a href="list-data.php">List UID</a> | <a href="#">Edit UID</a> | <a href="manage.php">Manage Portal</a> | <a href="logout.php">Logout</a></div>
<div class="tspace">
<div class="sbacked"><a href="add-new-share.php">Add a New Share</a>
					<a href="update-share.php">Update Share Value</a>
					<a href="share-watch.php">Market Watch</a>

</div>

<div class="boxview">
<h3>Update a Share Value</h3><hr>
<table><form action="add-share.php" method="POST">
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
</td></tr>
<tr><td class="formfieldright">New Share Value: </td><td><input type="text" name="valu" id="valu" class="textfield"></td></tr>
<tr height="70" align="right"><td></td><td><input type="submit" name="submit" value="Update" class="btnuid"></td></tr>
</table></form>
</div>
</div>
</body>
</html>
