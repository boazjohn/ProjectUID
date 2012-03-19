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
<h1> Create New Unique ID</h1>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="list-data.php">List UID</a> | <a href="edit.php">Edit UID</a> | <a href="logout.php">Logout</a></div>
<div class="tspace">
<h2>Occupation Details</h2><hr>
<form id="uid2" method="post" action="add3.php">
<table class="auto"> 
<tr><td class="formfieldright">Profession </td><td><select id="prof" name="prof" class="textfield3">
	<option value="" selected>--select--</option>
	<option value="Doctor" >Doctor</option>
	<option value="Engineer" >Engineer</option>
	<option value="Famrmer" >Farmer</option>
	<option value="Teacher" >Teacher</option>
	<option value="Advocate" >Advocate</option>
	<option value="Other" >Other..</option>
	</select></td><td class="formfieldright">
	If other specify <input type="text" name="prof1" class="textfield" >
	</td></tr>
<tr><td class="formfieldright">Annual Income </td><td><select id="anninc" name="anninc" class="textfield3">
	<option value="" selected>--select--</option>
	<option value="Below 10000" >Below 10000</option>
	<option value="Between 10000 and 25000" >10000-25000</option>
	<option value="Between 25001 and 50000" >25001-50000</option>
	<option value="Between 50001 and 100000" >50001-100000</option>
	<option value="Above 100000" >Above 100000</option>
	
	</select></td></tr>

	<tr><td></td><td></td><td><input type="submit" name="add" value="Add Details" class="btnuidright"></td></tr></table>
<table>
	<tr><td width="700" class="formfieldright"><a href="upload/upload-image.php"><span class="text">Skip This Step</span></a><br><hr></td></tr>
</div>
</table></div>
</form></div>

</body>
</html>
