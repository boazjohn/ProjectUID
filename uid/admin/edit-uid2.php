<?php
	require_once('auth.php');

	$connect = mysql_connect("localhost", "admin", "yahoo");
	mysql_select_db('user_data') or die ( mysql_error());


	$results = mysql_query($query);
//------------------------------------------------------------------------------------------------------------
$uidd = $_POST['uid'];
//select the table
$val_0=0;
$val_1=1;
$val_2=2;
$val_3=3;
$result = mysql_query("select * from udetails_ext where uid_id='$uidd'");
$r=mysql_fetch_array($result);
$bid1=$r["bid_1"];
$bid2=$r["bid_2"];
$bid3=$r["bid_3"];
cid1=$r['cid_1'];
cid2=$['cid_2'];

if($bid1!=0||$bid2!=0||$bid2!=0)
{
if($bid1!=0)
{
$result = mysql_query("select * from udetails_ext_bank where uid_id='$uidd' AND id_uid='$val_1'");
$r=mysql_fetch_array($result);
$account1=$r["bankaccount"];
$type1=$r["banktype"];
$name1=$r["bankname"];
}

if($bid2!=0)
{
$result = mysql_query("select * from udetails_ext_bank where uid_id='$uidd' AND id_uid='$val_2'");
$r=mysql_fetch_array($result);
$account2=$r["bankaccount"];
$type2=$r["banktype"];
$name2=$r["bankname"];
}

if($bid3!=0)
{
$result = mysql_query("select * from udetails_ext_bank where uid_id='$uidd' AND id_uid='$val_3'");
$r=mysql_fetch_array($result);
$account3=$r["bankaccount"];
$type3=$r["banktype"];
$name3=$r["bankname"];
}}
if($cid1!=0||$cid2!=0)
{
if($cid1!=0)
{
$result = mysql_query("select * from udetails_ext_credit where uid_id='$uidd' AND id_uid='$val_1'");
$r=mysql_fetch_array($result);
$credit1=$r["creditcard"];
$type1=$r["banktype"];
$name1=$r["bankname"];
}

if($cid2!=0)
{
$result = mysql_query("select * from udetails_ext_bank where uid_id='$uidd' AND id_uid='$val_2'");
$r=mysql_fetch_array($result);
$account2=$r["bankaccount"];
$type2=$r["banktype"];
$name2=$r["bankname"];
}
//----------------------------------------------------------------------------------------------------------------
	
	
	while ($row = mysql_fetch_array($result)) 
	{
$bnkaccnt1=$_POST['bnkaccnt1'];
$bnkaccnt2=$_POST['bnkaccnt2'];
$bnkaccnt3=$_POST['bnkaccnt3'];
$typ1=$_POST['typ1'];
$typ2=$_POST['typ2'];
$typ3=$_POST['typ3'];
$bank1=$_POST['bank1'];
$bank2=$_POST['bank2'];
$bank3=$_POST['bank3'];
$credit1=$_POST['credit1'];
$credit2=$_POST['credit2'];
$valid1=$_POST['cmm1'];
$valid1.=$_POST['cyyyy1'];
$valid2=$_POST['cmm1'];
$valid2.=$_POST['cyyyy1'];
$csv1=$_POST['csv1'];
$csv2=$_POST['csv2'];
$demat=$_POST['demat'];
$pan=$_POST['pan'];
$eleid=$_POST['eleid'];
$drvlic=$_POST['drvlic'];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit Citizen Details | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="cleanValidator.js"></script>
</head>
<body>
<h1> Edit Unique ID</h1>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="add-user.php">Create New UID</a> | <a href="list-data.php">List UID</a> | <a href="edit.php">Edit UID</a> | <a href="manage.php">Manage Portal</a> | <a href="logout.php">Logout</a></div>

<div class="tspace"><form id="uid2" method="post" action="add2.php">
<div class="more"><table><tr><td>Bank Account <input type="text" id="bnkaccnt1" name="bnkaccnt1" class="textfield" value="<?php echo $account1; ?>"></td><td>Type <select id="typ1" name="typ1" class="textfield3">
	<option value="<?php echo $type1; ?>"selected><?php echo $type1; ?></option>
	<option value="Savings" >Savings</option>
	<option value="Current" >Current</option></td><td>Bank Name <input type="text" id="bank1" name="bank1" class="textfield" value="<?php echo $name1; ?>"></td></tr>
	<tr><tr><td><br><br>Bank Account <input type="text" id="bnkaccnt2" name="bnkaccnt2" class="textfield" value="<?php echo $account2; ?>"></td><td><br><br>Type <select id="typ2" name="typ2" class="textfield3">
	<option value="<?php echo $type2; ?>" selected><?php echo $type2; ?></option>
	<option value="Savings" >Savings</option>
	<option value="Current" >Current</option></td><td><br><br><br>Bank Name <input type="text" id="bank2" name="bank2" class="textfield" value="<?php echo $name2; ?>"></td></tr>
	</tr><tr></tr><tr><tr><td><br><br>Bank Account <input type="text" id="bnkaccnt3" name="bnkaccnt3" class="textfield" value="<?php echo $account3; ?>"></td><td><br><br>Type <select id="typ3" name="typ3" class="textfield3">
	<option value="<?php echo $type3; ?>"selected><?php echo $type3; ?></option>
	<option value="Savings" >Savings</option>
	<option value="Current" >Current</option></td><td><br><br>Bank Name <input type="text" id="bank3" name="bank3" class="textfield" value="<?php echo $name3; ?>"></td></tr>
	</tr>

<tr><td><br><br>&nbsp;&nbsp;&nbsp;Credit Card <input type="text" id="credit1" name="credit1" class="textfield" value="<?php echo $account1; ?>"></td><td><br><br>Valid <select id="cmm1" name="cmm1" class="textfield4">
	<option value="<?php echo $account1; ?>" selected><?php echo $account1; ?></option>
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
	</select>
	<select id="cyyyy1" name="cyyyy1" class="textfield4">
	<option value="<?php echo $account1; ?>" selected><?php echo $account1; ?></option>
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
	</select></td>
	<td><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSV <input type="text" id="csv1" name="csv1" class="textfield" value="<?php echo $account1; ?>"></td></tr>

<tr><td><br><br>&nbsp;&nbsp;&nbsp;Credit Card <input type="text" id="credit2" name="credit2" class="textfield" value="<?php echo $account1; ?>"></td><td><br><br>Valid <select id="cmm2" name="cmm2" class="textfield4">
	<option value="<?php echo $account1; ?>" selected><?php echo $account1; ?></option>
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
	</select>
	<select id="cyyyy2" name="cyyyy2" class="textfield4">
	<option value="<?php echo $account1; ?>" selected><?php echo $account1; ?>"</option>
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
	</select></td>
	<td><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSV <input type="text" id="csv2" name="csv2" class="textfield" value="<?php echo $account1; ?>"></td></tr></div>

<div class="moretab">
<tr><td class="formfieldright" value="<?php echo $account1; ?>"><br><br>Demat Card <input type="text" id="demat" name="demat" class="textfield"></td></tr>
<tr><td class="formfieldright" value="<?php echo $account1; ?>"><br><br>Pan Card <input type="text" id="pan" name="pan" class="textfield"></td></tr>
<tr><td class="formfieldright" value="<?php echo $account1; ?>"><br><br>Electoral ID <input type="text" id="eleid" name="eleid" class="textfield"></td></tr>
<tr><td class="formfieldright" value="<?php echo $account1; ?>"><br><br>Driving License <input type="text" id="drvlic" name="drvlic" class="textfield"></td></tr>
</table></div>
<div class="btnnxt"><tr><td><input type="submit" name="add" value="Add To UID" class="btnuid"></tr></td></div>
</div>
</table>
</form>

</body>
</html>
