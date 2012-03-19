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
<title>Administrator Index</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Citizen Portal Management</h1>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="add-user.php">Create New UID</a> | <a href="list-data.php">List UID</a> | <a href="#">Edit UID</a> | <a href="manage.php">Manage Portal</a> | <a href="logout.php">Logout</a></div>
<div class="tspacemod"><br><br>
<form name="formbill" action="bill-exec.php" method="POST">
<div class="boxbutton"><a href="create-bill.php">Create Bill</a></div><br><br>
<div class="boxfloatbig"><table><tr><td class="formfieldright">Select UID : </td><td>

<select id="uid" name="uid" class="textfield6"><option value="" selected>-- Select a UID --</option>
<?php 
//grab all the content
while($r=mysql_fetch_array($result))
{	
   //the format is $variable = $r["nameofmysqlcolumn"];
     
$uid=$r["uid"];	 
$fname=$r["first_name"];
$lname=$r["last_name"];

$uidd = md5($uid);
echo '<option value="',$uidd,'">',$uid,'</option>';
}
?>
</td></tr>
<tr><td class="formfieldright">Bill Type : </td><td><input type="text" id="type" name="type" class="textfield"></td></tr>
<tr><td class="formfieldright"> Description : </td><td><textarea name="desc" id="desc" class="textfield"></textarea></td></tr>
<tr><td class="formfieldright">Bill Date : </td><td>
<select id="dd" name="dd" class="textfield2"><option value="" selected>DD</option>
	<option value="01" >01</option>
	<option value="02" >02</option>
	<option value="03" >03</option>
	<option value="04" >04</option>
	<option value="05" >05</option>
	<option value="06" >06</option>
	<option value="07" >07</option>
	<option value="08" >08</option>
	<option value="09" >09</option>
	<option value="10" >10</option>
	<option value="11" >11</option>
	<option value="12" >12</option>
	<option value="13" >13</option>
	<option value="14" >14</option>
	<option value="15" >15</option>
	<option value="16" >16</option>
	<option value="17" >17</option>
	<option value="18" >18</option>
	<option value="19" >19</option>
	<option value="20" >20</option>
	<option value="21" >21</option>
	<option value="22" >22</option>
	<option value="23" >23</option>
	<option value="24" >24</option>
	<option value="25" >25</option>
	<option value="26" >26</option>
	<option value="27" >27</option>
	<option value="28" >28</option>
	<option value="29" >29</option>
	<option value="30" >30</option>
	<option value="31" >31</option>
	</select><select id="mm" name="mm" class="textfield2">
	<option value="" selected>MM</option>
	<option value="01" >January</option>
	<option value="02" >February</option>
	<option value="03" >March</option>
	<option value="04" >April</option>
	<option value="05" >May</option>
	<option value="06" >June</option>
	<option value="07" >July</option>
	<option value="08" >August</option>
	<option value="09" >September</option>
	<option value="10" >October</option>
	<option value="11" >November</option>
	<option value="12" >December</option>
	</select><select id="yyyy" name="yyyy" class="textfield5">
	<option value="" selected>YYYY</option>
	<option value="2010" >2010</option>
	<option value="2011" >2011</option>
	<option value="2012" >2012</option>
	<option value="2013" >2013</option>
	<option value="2014" >2014</option>
	<option value="2015" >2015</option>
	<option value="2016" >2016</option>
	<option value="2017" >2017</option>
	<option value="2018" >2018</option>
	<option value="2019" >2019</option>
	<option value="2020" >2020</option>
	<option value="2021" >2021</option>
	<option value="2022" >2022</option>
	<option value="2023" >2023</option>
	<option value="2024" >2024</option>
	<option value="2025" >2025</option>
	<option value="2026" >2026</option>
	<option value="2027" >2027</option>
	<option value="2028" >2028</option>
	<option value="2029" >2029</option>
	<option value="2030" >2030</option>
	</select>
</td></tr>
<tr><td class="formfieldright">Amount in INR : </td><td><input type="text" id="amt" name="amt" class="textfield"></td></tr>
</table><input type="submit" name="submit" value="Continue" class="btnuidright"></div>
</form>
</div>
</body>
</html>
