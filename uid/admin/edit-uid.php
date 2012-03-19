<?php
	require_once('auth.php');
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Edit Citizen Details | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="cleanValidator.js">
</script>
</head>
<body>
<h1> Edit Unique ID</h1>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="add-user.php">Create New UID</a> | <a href="list-data.php">List UID</a> | <a href="edit.php">Edit UID</a> | <a href="manage.php">Manage Portal</a> | <a href="logout.php">Logout</a></div>

<div class="tspacemod1">
<?php

	$connect = mysql_connect("localhost", "admin", "yahoo");
	mysql_select_db('user_data') or die ( mysql_error());
	$eod=$_POST['eod'];
		$uid=$_POST['uid'];
	switch ($_POST['eod']) {
		case "edit":
		$result = mysql_query("select * from udetails order by id");
		$results = mysql_query($query);
	
		while ($row = mysql_fetch_array($result)) 
		{
			$result = mysql_query("select * from udetails where uid='$uid'");
			$r=mysql_fetch_array($result);
			$fname=$r['first_name'];
			$lname=$r['last_name'];
			$dd=$r['dd'];
			$mm=$r['mm'];
			$yyyy=$r['yyyy'];
			$sex=$r['sex'];
			$add1=$r['address_line_one'];
			$add2=$r['address_line_two'];
			$add3=$r['address_line_three'];
			$pin=$r['pincode'];
			$panc=$r['panchayath'];
			$tal=$r['taluk'];
			$dis=$r['district'];
			$state=$r['state'];
			$phno=$r['phone_no'];
			$email=$r['email'];
		}
?>

<form id="uid" method="post" action="add-edit.php">
<table><tr><td class="formfieldright"><input type="hidden" id="uid" name="uid" value="<?php echo $uid; ?>"></td></tr>
<tr><td class="formfieldright">First name <input type="text" id="fname" name="fname" class="textfield" value="<?php echo $fname; ?>"></td><td class="formfieldrightmod">
	<input type="text"  id="lname" name="lname" class="textfield" value="<?php echo $lname; ?>"> Last name </td></tr>
<tr><td class="formfieldright">
 DOB <select id="dd" name="dd" class="textfield2">
<?php
$selected = 'selected';

echo '<option value="'.$dd. '"' .$selected. '>' .$dd.  '</option>' ;


?>

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
	</select>
	<select id="mm" name="mm" class="textfield2">
	<?php
$selected = 'selected';

echo '<option value="'.$mm. '"' .$selected. '>' .$mm.  '</option>' ;


?>
	<option value="January" >January</option>
	<option value="February" >February</option>
	<option value="March" >March</option>
	<option value="April" >April</option>
	<option value="May" >May</option>
	<option value="June" >June</option>
	<option value="July" >July</option>
	<option value="August" >August</option>
	<option value="September" >September</option>
	<option value="October" >October</option>
	<option value="November" >November</option>
	<option value="December" >December</option>
	</select>
	<select id="yyyy" name="yyyy" class="textfield2">
		<?php
$selected = 'selected';

echo '<option value="'.$yyyy. '"' .$selected. '>' .$yyyy.  '</option>' ;

for($y=1900;$y<2010;$y++){
?>
	<option value="<?php echo $y; ?>" ><?php echo $y; ?></option>
	<?php
	}
	?>
	</select></td>
	<td class="formfieldrightmod">
	<select id="sex" name="sex" class="textfield3">
	<?php
	$selected = 'selected';
	echo '<option value="'.$sex. '"' .$selected. '>' .$sex.  '</option>' ;
	?>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select> Sex 
</td></tr>
<tr><td class="formfieldright">Address Line 1
	<input type="text" id="add1" name="add1" class="textfield" value="<?php echo $add1; ?>"></td><td class="formfieldrightmod">
	<input type="text" id="add2" name="add2" class="textfield" value="<?php echo $add2; ?>"> Address Line 2</td></tr>

<tr><td class="formfieldright">Address Line 3
	<input type="text" id="add3" name="add3" class="textfield" value="<?php echo $add3; ?>"></td><td class="formfieldrightmod">
	<input type="text" id="pin" name="pin" class="textfield" value="<?php echo $pin; ?>"> Pincode</td></tr>

<tr><td class="formfieldright">Panchayath
<input type="text" id="panc" name="panc" class="textfield" value="<?php echo $panc; ?>"></td><td class="formfieldrightmod">
	<input type="text" id="tal" name="tal" class="textfield" value="<?php echo $tal; ?>"> Taluk</td></tr>

<tr><td class="formfieldright">State <select id="state" name="state" class="textfield3">
                                      	<?php
										$selected = 'selected';

										echo '<option value="'.$state. '"' .$selected. '>' .$state.  '</option>' ;


										?>                                     
                                      <option value="Andaman and Nicobar Islands">Andaman 
                                      and Nicobar Islands </option>
                                      <option value="Andhra Pradesh">Andhra Pradesh 
                                      </option>

                                      <option value="Arunachal Pradesh">Arunachal 
                                      Pradesh </option>
                                      <option value="Assam">Assam </option>
                                      <option value="Bihar">Bihar </option>
                                      <option value="Chandigarh">Chandigarh </option>
                                      <option value="Chhatisgarh">Chhatisgarh</option>
                                      <option value="Dadra and Nagar Haveli">Dadra 
                                      and Nagar Haveli </option>

                                      <option value="Daman and Diu">Daman and 
                                      Diu </option>
                                      <option value="Delhi">Delhi </option>
                                      <option value="Goa">Goa </option>
                                      <option value="Gujarat">Gujarat </option>
                                      <option value="Haryana">Haryana </option>
                                      <option value="Himachal Pradesh">Himachal 
                                      Pradesh </option>

                                      <option value="Jammu and Kashmir">Jammu 
                                      and Kashmir </option>
                                      <option value="Jharkhand">Jharkhand</option>
                                      <option value="Karnataka">Karnataka </option>
                                      <option value="Kerala">Kerala </option>
                                      <option value="Lakshadweep">Lakshadweep 
                                      </option>
                                      <option value="Madhya Pradesh">Madhya Pradesh 
                                      </option>

                                      <option value="Maharashtra">Maharashtra 
                                      </option>
                                      <option value="Manipur">Manipur </option>
                                      <option value="Meghalaya">Meghalaya </option>
                                      <option value="Mizoram">Mizoram </option>
                                      <option value="Nagaland">Nagaland </option>
                                      <option value="Orissa">Orissa </option>

                                      <option value="Pondicherry">Pondicherry 
                                      </option>
                                      <option value="Punjab">Punjab </option>
                                      <option value="Rajasthan">Rajasthan </option>
                                      <option value="Sikkim">Sikkim </option>
                                      <option value="Tamil Nadu">Tamil Nadu </option>
                                      <option value="Tripura">Tripura </option>

                                      <option value="Uttaranchal">Uttaranchal</option>
                                      <option value="Uttar Pradesh">Uttar Pradesh 
                                      </option>
                                      <option value="West Bengal">West Bengal 
                                      </option>
                                    </select></td><td  class="formfieldrightmod">
									<select id="dis" name="dis" class="textfield3">
		<?php
$selected = 'selected';

echo '<option value="'.$dis. '"' .$selected. '>' .$dis.  '</option>' ;


?>
	<option value="Thiruvananthapuram">Thiruvanathapuram</option>
	<option value="Kollam">Kollam</option>
	<option value="Pathanamthitta">Pathanamthitta</option>
	<option value="Alappuzha">Alappuzha</option>
	<option value="Kottayam">Kottayam</option>
	<option value="Idukki">Idukki</option>
	<option value="Ernakulam">Ernakulam</option>
	<option value="Thrissur">Thrissur</option>
	<option value="Malappuram">Malappuram</option>
	<option value="Kozhikode">Kozhikode</option>
	<option value="Wayanad">Wayanad</option>
	<option value="Palakkad">Palakkad</option>
	<option value="Kannur">Kannur</option>
	<option value="Kasargod">Kasargod</option>
	<option value="Other">Other</option></select>
	
District</td></tr> 
<tr><td class="formfieldright">Phone
	<input type="text" id="phno" name="phno" class="textfield" value="<?php echo $phno; ?>"></td><td  class="formfieldrightmod">
	<input type="text" id="email" name="email" class="textfield" value="<?php echo $email; ?>"> email</td></tr>
<script type="text/javascript">

    cleanValidator.init({
        formId: 'uid',
		inputColors: ['', ''],
        errorColors: ['#ece359', '#66171a'],
        isRequired: ['fname','lname','dd','mm','yyyy','sex','add1','add2','add3','pin','panc','tal','state','dis','phno','email'],
        isNumeric: ['pin','phno'],
		isEmail: ['email']
	});
</script>

	<tr align="center" height="70px"><td><td><input type="submit" name="add" value="Edit" class="btnuid"></td></td></tr>
	</table>
	</form>
	
	<?php
	break;
	case "delete":
					$delete="DELETE FROM udetails
					WHERE uid = '$uid'
					LIMIT 1";
					$results = mysql_query($delete) or die(mysql_error());
					
						$delete="DELETE FROM udetails_ext
					WHERE uid_id = '$uid'
					LIMIT 1";
					$results = mysql_query($delete) or die(mysql_error());
					
						$delete="DELETE FROM udetails_ext1
					WHERE uid_id = '$uid'
					LIMIT 1";
					$results = mysql_query($delete) or die(mysql_error());
					
					$delete="DELETE FROM udetails_ext_bank
					WHERE uid_id = '$uid'
					";
					$results = mysql_query($delete) or die(mysql_error());
					
					$delete="DELETE FROM doctor_db
					WHERE uid_id = '$uid'
					LIMIT 1";
					$results = mysql_query($delete) or die(mysql_error());
					
					$delete="DELETE FROM udetails_ext_credit
					WHERE uid_id = '$uid'
					";
					$results = mysql_query($delete) or die(mysql_error());
					
					$uidd=md5($uid);
					
					mysql_select_db('user_db') or die ( mysql_error());
					
					$delete="DELETE FROM udetails
					WHERE uid = '$uidd'
					LIMIT 1";
					$results = mysql_query($delete) or die(mysql_error());
					
						$delete="DELETE FROM udetails_ext
					WHERE uid_id = '$uidd'
					LIMIT 1";
					$results = mysql_query($delete) or die(mysql_error());
					
						$delete="DELETE FROM udetails_ext1
					WHERE uid_id = '$uidd'
					LIMIT 1";
					$results = mysql_query($delete) or die(mysql_error());
					
					$delete="DELETE FROM udetails_ext_bank
					WHERE uid_id = '$uidd'
					";
					$results = mysql_query($delete) or die(mysql_error());
					
					$delete="DELETE FROM doctor_db
					WHERE uid_id = '$uidd'
					LIMIT 1";
					$results = mysql_query($delete) or die(mysql_error());
					
					$delete="DELETE FROM udetails_ext_credit
					WHERE uid_id = '$uidd'
					";
					$results = mysql_query($delete) or die(mysql_error());
					
					$delete="DELETE FROM doc_appoinment
					WHERE doc_id = '$uidd'
					";
					$results = mysql_query($delete) or die(mysql_error());
					
					$delete="DELETE FROM doc_appoinment
					WHERE user_id = '$uidd'
					";
					$results = mysql_query($delete) or die(mysql_error());
					
					$delete="DELETE FROM doc_ques
					WHERE doc_id = '$uidd'
					";
					$results = mysql_query($delete) or die(mysql_error());
					
					$delete="DELETE FROM doc_ques
					WHERE user_id = '$uidd'
					";
					$results = mysql_query($delete) or die(mysql_error());
					
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
				
					 if ($results){
	redirect("edit.php");
    }
    else die(mysql_error());	
	

  
	
	?>
	


<br><br><br>
<div class="err"> <img src="images/loading.gif"><br />Please wait... Deleting UID :<?php echo '      [',$uid,'] ';?></img></div>
<?php 
}
?>
</body>
</html>
