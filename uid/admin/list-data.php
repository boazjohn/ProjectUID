<?php
	require_once('auth.php');
	
	
//connect to mysql
mysql_connect("localhost","admin","yahoo"); 
	
//select which database you want to edit
mysql_select_db("user_data"); 

//select the table
$result = mysql_query("select * from udetails order by id");

	$results = mysql_query($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>List Unique ID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>List Unique ID</h1>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="add-user.php">Create New UID</a> | <a href="list-data.php">List UID</a> | <a href="#">Edit UID</a> | <a href="manage.php">Manage Portal</a> | <a href="logout.php">Logout</a></div>

<div class="tspace">
<table class="ltable">
		<tr>    <th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Sex</th>
				<th>Date Of Birth</th>
				<th>Address Line 1</th>
				<th>Address Line 2</th>
				<th>Address Line 3</th>
				<th>Panchayath</th>
				<th>Taluk</th>
				<th>District</th>
				<th>State</th>
				<th>Pincode</th>
				<th>Phone</th>
				<th>email id</th>
			</tr>
<?php
//grab all the content
while($r=mysql_fetch_array($result))
{	
   //the format is $variable = $r["nameofmysqlcolumn"];
     
$id=$r["id"];
$uid=$r["uid"];	 
$fname=$r["first_name"];
$lname=$r["last_name"];
$dd=$r["dd"];
$mm=$r["mm"];
$yyyy=$r["yyyy"];
$sex=$r["sex"];
$add1=$r["address_line_one"];
$add2=$r["address_line_two"];
$add3=$r["address_line_three"];
$pin=$r["pincode"];
$panc=$r["panchayath"];
$tal=$r["taluk"];
$dis=$r["district"];
$state=$r["state"];
$phno=$r["phone_no"];
$email=$r["email"];
  
echo '<tr><td>',$id,'</td><td>',$fname,'</td><td>',$lname,'</td><td>',$sex,'</td><td>',$dd,' - ',$mm,' - ',$yyyy,'</td><td>',$add1,'</td><td>',$add2,'</td><td>',$add3,'</td><td>',$panc,'</td><td>',$tal,'</td><td>',$dis,'</td><td>',$state,'</td><td>',$pin,'</td><td>',$phno,'</td><td>',$email,'</td><td>',$uid,'</td></tr>';
}
?>

</table>
</div>
</body>
</html>
