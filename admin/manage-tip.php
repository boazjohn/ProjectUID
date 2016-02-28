<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit Tip Of The Day | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="cleanValidator.js"></script>
</head>
<body>
<h1> Tip Of The Day</h1>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="list-data.php">List UID</a> | <a href="edit.php">Edit UID</a> | <a href="logout.php">Logout</a></div>
<div class="tspace"><form id="uid2" method="post" action="add-tip.php">
<table>	
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tip Head <input type="text" cols=50 name="tiphead" class="textfield7"></textarea>
</td></tr>

<tr><td><br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="tipbody"  class="textarea"></textarea>
</td></tr>

	<tr align="right"><td><input type="submit" name="add" value="Done" class="btnuid"></td></tr>
</table></div>
</form></div>

</body>
</html>
