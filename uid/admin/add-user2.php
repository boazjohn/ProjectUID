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
<script language="JavaScript">  
<!--  
     function expand(param)  
    {  
        param.style.display=(param.style.display=="none")?"":"none";  
     }  
//-->  
</script>

</head>
<body>
<h1> Create New Unique ID</h1>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="add-user.php">Create New UID</a> | <a href="list-data.php">List UID</a> | <a href="#">Edit UID</a> | <a href="manage.php">Manage Portal</a> | <a href="logout.php">Logout</a></div>

<div class="tspace">
<h2>Banking Details</h2><hr>
<form id="uid2" method="post" action="add2.php">
<div class="more"><table><tr><td>Bank Account <input type="text" id="bnkaccnt1" name="bnkaccnt1" class="textfield"></td><td>Type <select id="typ1" name="typ1" class="textfield3">
	<option value="" selected>--Select--</option>
	<option value="Savings" >Savings</option>
	<option value="Current" >Current</option></td><td>Bank Name <input type="text" id="bank1" name="bank1" class="textfield"></td></tr>
</table></div>
	<div id="expnd1" style="display:none">  
    <div class="more"><table><tr><tr><td>Bank Account <input type="text" id="bnkaccnt2" name="bnkaccnt2" class="textfield"></td><td>Type <select id="typ2" name="typ2" class="textfield3">
	<option value="" selected>--Select--</option>
	<option value="Savings" >Savings</option>
	<option value="Current" >Current</option></td><td>Bank Name <input type="text" id="bank2" name="bank2" class="textfield"></td></tr>
	</tr><tr></tr><tr><tr><td><br><br><br>Bank Account <input type="text" id="bnkaccnt3" name="bnkaccnt3" class="textfield"></td><td><br><br><br>Type <select id="typ3" name="typ3" class="textfield3">
	<option value="" selected>--Select--</option>
	<option value="Savings" >Savings</option>
	<option value="Current" >Current</option></td><td><br><br><br>Bank Name <input type="text" id="bank3" name="bank3" class="textfield"></td></tr>
	</tr></table></div></div>
<div class="more"><table>	
<tr><td>&nbsp;&nbsp;&nbsp;Credit Card <input type="text" id="credit1" name="credit1" class="textfield"></td><td>Valid <select id="cmm1" name="cmm1" class="textfield4">
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
	</select>
	<select id="cyyyy1" name="cyyyy1" class="textfield4">
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
	</select></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSV <input type="text" id="csv1" name="csv1" class="textfield"></td></tr></table></div>
<div id="expnd2" style="display:none">
<div class="more"><table>	
<tr><td>&nbsp;&nbsp;&nbsp;Credit Card <input type="text" id="credit2" name="credit2" class="textfield"></td><td>Valid <select id="cmm2" name="cmm2" class="textfield4">
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
	</select>
	<select id="cyyyy2" name="cyyyy2" class="textfield4">
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
	</select></td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSV <input type="text" id="csv2" name="csv2" class="textfield"></td></tr></table></div></div>

<div class="moretab">
<br><table>
<tr><td class="formfieldright">Demat Card <input type="text" id="demat" name="demat" class="textfield"></td></tr>
<tr><td class="formfieldright">Pan Card <input type="text" id="pan" name="pan" class="textfield"></td></tr>
<tr><td class="formfieldright">Electoral ID <input type="text" id="eleid" name="eleid" class="textfield"></td></tr>
<tr><td class="formfieldright">Driving License <input type="text" id="drvlic" name="drvlic" class="textfield"></td></tr>
</table></div>
<table width=750>
<tr><td class="formfieldleft"><a href="javascript:expand(document.getElementById('expnd1'))"><span class="text">Add More Bank Accounts</span></a><br><hr></td>
<td class="formfieldleft"><a href="javascript:expand(document.getElementById('expnd2'))"><span class="text">Add More Credit Card</span></a><br><hr></td>
<td class="formfieldleft"><a href="add-user3.php"><span class="text">Skip This Step</span></a><br><hr></td>
<div class="btnnxt">
<script type="text/javascript">

    cleanValidator.init({
        formId: 'uid2',
		inputColors: ['', ''],
        errorColors: ['#ece359', '#66171a'],
        isRequired: ['bnkaccnt1','typ1','bank1','credit1','cmm1','cyyyy1','csv1','demat','pan','eleid','drvlic'],
        isNumeric: ['bnkaccnt1','credit1','csv1']
	});
</script>
	<td align="right"><input type="submit" name="add" value="Add Details" class="btnuid"></td></tr>
</div>
</table></div>
</form></div>

</body>
</html>
