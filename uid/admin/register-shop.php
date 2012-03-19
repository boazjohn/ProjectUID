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
<div class="boxbutton"><a href="register-shop.php">New Shop</a></div><br><br><div class="boxfloatbig">
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo $msg;
		}
		unset($_SESSION['ERRMSG_ARR']);
	}

$uid='SHP';$uid.=rand(100000,999999);
?>
<form id="loginForm" name="loginForm" method="post" action="shop.register-exec.php">
  <table>
    <tr>
       <th>Shop Name</th>
      <td class="formfieldright"><input name="name" type="text" class="textfield" id="name" /></td>
    </tr>
    <tr>
      <th>Shop Type</th>
      <td class="formfieldright"><input name="type" type="text" class="textfield" id="type" /></td>
    </tr>
    <tr>
      <th>Login UID</th>
      <td class="formfieldright"><input name="login" type="text" class="textfield" id="login" value="<?php echo $uid; ?>" READONLY /></td>
    </tr>
    <tr>
      <th>Password</th>
      <td class="formfieldright"><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <th>Confirm Password </th>
      <td class="formfieldright"><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td class="formfieldright"><input type="submit" name="Submit" value="Register" class="btnuid" /></td>
    </tr>
  </table>
</form>

</div>
<div class="boxbutton"><a href="list-shop.php">List Shops</a></div><br><br>


</div>
</body>
</html>
