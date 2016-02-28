<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Citizen Details | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="cleanValidator.js"></script>
</head>
<body>
<h1> Build Doctor Database</h1>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="list-data.php">List UID</a> | <a href="edit.php">Edit UID</a> | <a href="logout.php">Logout</a></div>
<div class="tspace">
<h2>Doctor Details</h2><hr>
<form id="uid2" method="post" action="add4.php">
<table class="auto">
<tr><td class="formfieldright">Experience </td><td><select id="exp" name="exp" class="textfield3">
	<option value="" selected>--select--</option>
	<option value="b10" >Below 10 yrs</option>
	<option value="a10" >Above 10 yrs</option>
	</select></td></tr>
	

<tr><td class="formfieldright">Hospital </td><td><select id="hospital" name="hospital" class="textfield3">
	<option value="" selected>--select--</option>
	<option value="H1" >H1</option>
	<option value="H2" >H2</option>
	<option value="H3" >H3</option>
	<option value="H4" >H4</option>
	<option value="H5" >H5</option>
	</select></td></tr>
<tr><td class="formfieldright">Verification </td><td><select id="verific" name="verific" class="textfield3">
	<option value="" selected>--select--</option>
	<option value="done" >Done</option>
	<option value="not done" >Not Done</option>
	</select></td></tr>
	
<script type="text/javascript">

    cleanValidator.init({
        formId: 'uid2',
		inputColors: ['', ''],
        errorColors: ['#ece359', '#66171a'],
        isRequired: ['bnkaccnt1','typ1','bank1','credit1','cmm1','cyyyy1','csv1','demat','pan','eleid','drvlic'],
        isNumeric: ['bnkaccnt1','credit1','csv1']
	});
</script>
<div class="btnnxt">
	<tr></td><td><td><input type="submit" name="add" value="Add to Database" class="btnuidright"></tr>
</div>
</table></div>
</form></div>

</body>
</html>
