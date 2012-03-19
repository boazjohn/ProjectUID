<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
//connect to mysql
mysql_connect("localhost","admin","yahoo"); 

//select which database you want to edit
mysql_select_db("user_admin"); 
$uid = $_SESSION['SESS_MEMBER_ID'];
//select the table
$result = mysql_query("select * from kiosk where id ='$uid'");
$r=mysql_fetch_array($result);
$cat=$r["category"];
if($cat=='shop')
{	
?>
<title>Administrator Index</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Welcome Shop <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
<div class="bmenu"><a href="member-index.php">Home</a> |  <a href="add-item.php">Add Item</a> |  <a href="shop-manage.php">Manage Items</a> | <a href="logout.php">Logout</a></div>
<div class="tspace"><p><br><br>Welcome to Unique ID Administrator Control Panel. [ <?php echo date("l, F d, Y h:i" ,time());?> ]

</p></div>
</body>
<?php
}
else
{ ?>
<title>Administrator Index</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Welcome ticket <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="validate-ticket.php">Validate Ticket</a> | <a href="logout.php">Logout</a></div>
<div class="tspace"><p><br><br>Welcome to Unique ID Administrator Control Panel. [ <?php echo date("l, F d, Y h:i" ,time());?> ]

</p></div>
</body>
<?php } ?>
</html>

