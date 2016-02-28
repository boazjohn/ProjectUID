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
<h1>Citizen Portal Management</h1>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="add-user.php">Create New UID</a> | <a href="list-data.php">List UID</a> | <a href="#">Edit UID</a> | <a href="manage.php">Manage Portal</a> | <a href="logout.php">Logout</a></div>
<div class="tspacemod">
<div class="boxbutton"><a href="register-ticket.php">New Kiosk</a></div><br><br>
<div class="boxbutton"><a href="list-ticket.php">List Kiosk</a></div><br><br>
<div class="boxfloatbig">
<table class="ltable">
<tr><th>ID</th><th>Kiosk Name</th><th>Kiosk Type</th><th>Login UID</th></tr>
<?php
//connect to mysql
mysql_connect("localhost","admin","yahoo"); 
	
//select which database you want to edit
mysql_select_db("user_admin"); 

$cat='ticket';
//select the table
$result = mysql_query("select * from kiosk order by id");
	
while($r=mysql_fetch_array($result))
{	
   //the format is $variable = $r["nameofmysqlcolumn"];
     
$bname=$r["name"];
$btype=$r["type"];	 
$blogin=$r["login"];
$id=$r["id"];
$cid=$r["category"];

if($cid==$cat)
{
echo '<tr><td>',$id,'</td><td>',$bname,'</td><td>',$btype,'</td><td>',$blogin,'</td></tr>';
}
}
?>
</div>




</div>
</body>
</html>
