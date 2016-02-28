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
<h1>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="add-user.php">Create New UID</a> | <a href="list-data.php">List UID</a> | <a href="edit.php">Edit UID</a> | <a href="manage.php">Manage Portal</a> | <a href="logout.php">Logout</a></div>
<div class="tspace"><p><br><br>Welcome to Unique ID Administrator Control Panel. [ <?php echo date("l, F d, Y h:i" ,time());?> ]

</p></div>
</body>
</html>
