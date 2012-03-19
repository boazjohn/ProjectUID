<?php

	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add share Details | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>

<?php

$connect = mysql_connect("localhost", "admin", "yahoo");
//create database
$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_db") or die(mysql_error());
mysql_select_db("user_db");
$admin = "CREATE TABLE IF NOT EXISTS udetails_share (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name varchar(255) NOT NULL,
value INT(25) NOT NULL,
pvalue INT(25) NOT NULL,
tstamp TIMESTAMP NOT NULL

)";
$result = mysql_query($admin) or die(mysql_error());

$submit=$_POST['submit'];

if($submit=="Add")
{

$name=$_POST['name'];
$value=$_POST['value'];
$valuep=$_POST['valuep'];

$insert = "INSERT INTO udetails_share (name, value, pvalue) ".
			"VALUES ('$name', '$value', '$valuep')";
			$results = mysql_query($insert);
			
			if($results)
	  {
	  redirect("manage-share-done.php"); }
}

else if($submit=='Update')
{

$id=$_POST['ide'];
$value=$_POST['valu'];
$result = mysql_query("select * from udetails_share order by id");
$r=mysql_fetch_array($result);
$oval=$r["value"];

$update = "UPDATE udetails_share SET pvalue = '$oval'
WHERE id = '$id'";
$results = mysql_query($update);

$update = "UPDATE udetails_share SET value = '$value'
WHERE id = '$id'";
$results = mysql_query($update);

if($results)
	  {
	  redirect("manage-share-done.php"); }

}
			
  
	

function redirect($url){
    if (!headers_sent()){    //If headers not sent yet... then do php redirect
        header('Location: '.$url); exit;
    }else{                    //If headers are sent... do java redirect... if java disabled, do html redirect.
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="2;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}

?>

<body>
<br><br><br>
<div class="err"> <img src="images/loading.gif"><br />Please wait... Adding values to database...</img>
</body>
</html>


