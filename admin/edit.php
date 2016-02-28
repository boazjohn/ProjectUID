<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit Citizen Details | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="cleanValidator.js"></script>
</head>
<body>
<h1> Edit User Details</h1>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="list-data.php">List UID</a> | <a href="edit.php">Edit UID</a> | <a href="logout.php">Logout</a></div>
<div class="tspace"><form id="uid2" method="post" action="edit-uid.php">
<table><tr><td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter UID <input type="text" name="uid" class="textfield" >
	</td></tr></table>
<table><tr><td>
Edit Or Delete <select id="eod" name="eod" class="textfield3">
	
	<option value="edit">Edit</option>
	<option value="delete" >Delete</option>
	</select>
</td></tr>
<div class="btnnxt">
	<tr align="right"><td><input type="submit" name="add" value="Edit" class="btnuid"></tr>
</div>
</table></div>
</form></div>

</body>
</html>
