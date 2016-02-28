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
<h3>Add a New Share</h3><hr>
<table><form name="share" action="add-share.php" method="POST">
<tr><td class="formfieldright">Market Share Name: </td><td><input type="text" name="name" id="name" class="textfield"></td></tr>
<tr><td class="formfieldright">Previous Share Value: </td><td><input type="text" name="valuep" id="valuep" class="textfield"></td></tr>
<tr><td class="formfieldright">Current Share Value: </td><td><input type="text" name="value" id="value" class="textfield"></td></tr>
<tr height="70" align="right"><td></td><td><input type="submit" name="submit" value="Add" class="btnuid"></td></tr>
</table></form>
</div>
</div>
</body>
</html>
