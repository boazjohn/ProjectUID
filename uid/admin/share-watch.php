<?php
	require_once('auth.php');

	$connect = mysql_connect("localhost", "admin", "yahoo");
//create database
$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_db") or die(mysql_error());
mysql_select_db("user_db");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Share updation| UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="cleanValidator.js">
</script>
</head>
<body>
<h1>Citizen Portal Management</h1>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="add-user.php">Create New UID</a> | <a href="list-data.php">List UID</a> | <a href="#">Edit UID</a> | <a href="manage.php">Manage Portal</a> | <a href="logout.php">Logout</a></div>

<div class="tspace">
<div class="shareview">

<img src="images/market-back.jpg"></img>
<div class="sharetext">
<?php 
echo '<marquee direction="left" onmouseover="this.stop()" scrollamount="6" onmouseout="this.start()" height="40px">';
$result = mysql_query("select * from udetails_share order by id");
while($r=mysql_fetch_array($result)) 
{
$name=$r["name"];
$val=$r["value"];
$pval=$r["pvalue"];
if($pval!=0)
{
$perc=($val/$pval)/100; }
else {
$perc=$val/100;
}
if($val>$pval)
{
echo $name,': ';
echo '<span class="greenb">';
echo $val,'(+',round($perc,2),'%) <img src="images/up.png"></img>  ';
echo '</span> &#149; ';
}
else if($val<$pval)
{
echo $name,': ';
echo '<span class="redb">';
echo $val,'(-',round($perc,2),'%) <img src="images/down.png"></img>  ';
echo '</span> &#149; ';
}
else
{
echo $name,': ';
echo '<span class="redb">';
echo $val,'(0.00%) <img src="images/still.png"></img>  ';
echo '</span> &#149; ';
}
}
echo '</marquee>';

?>
</div>
</div>


<div class="sbacked"><a href="add-new-share.php">Add a New Share</a>
					<a href="update-share.php">Update Share Value</a>
					<a href="share-watch.php">Market Watch</a>

</div></div>
</body>
</html>
