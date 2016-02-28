<?php
	require_once('auth.php');

	
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
<h1>Validate shares</h1>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="add_sharedit.php">Validate</a> | <a href="logout.php">Logout</a></div>

<div class="tspacemod1"><form id="uid" method="post" action="add_sharedit.php">
<table><tr><td class="formfieldright">BSE <input type="text" id="bse" name="bse" class="textfield" value="<?php echo $bse; ?>"></td></tr>
<tr><td class="formfieldright">NSE <input type="text" id="nse" name="nse" class="textfield" value="<?php echo $nse; ?>"></td>
<td class="formfieldright">CSE <input type="text" id="cse" name="cse" class="textfield" value="<?php echo $cse; ?>"></td>
<td class="formfieldright">Reliance <input type="text" id="rel" name="rel" class="textfield" value="<?php echo $rel; ?>"></td>
<td class="formfieldright">TATA<input type="text" id="tata" name="tata" class="textfield" value="<?php echo $tata; ?>"></td>
<td class="formfieldright">Bharati<input type="text" id="bharati" name="bharati" class="textfield" value="<?php echo $bharati; ?>"></td>
<td class="formfieldright">Bajaj<input type="text" id="bajaj" name="bajaj" class="textfield" value="<?php echo $bajaj; ?>"></td>
<td class="formfieldright">Birla <input type="text" id="birla" name="birla" class="textfield" value="<?php echo $birla; ?>"></td>
<td class="formfieldright">Mahindra <input type="text" id="mahindra" name="mahindra" class="textfield" value="<?php echo $mahindra; ?>"></td>
<td class="formfieldright">Kingfisher <input type="text" id="kingfisher" name="kingfisher" class="textfield" value="<?php echo $kingfisher; ?>"></td>
</tr>
 
<script type="text/javascript">

    cleanValidator.init({
        formId: 'uid',
		inputColors: ['', ''],
        errorColors: ['#ece359', '#66171a'],
        isRequired: ['bse','nse','cse','rel','tata','bharati','bajaj','birla','mahindra','kingfisher'],
        isNumeric: ['bse','nse','cse','rel','tata','bharati','bajaj','birla','mahindra','kingfisher'],
		
	});
</script>

	<tr align="center" height="70px"><td><td><input type="submit" name="add" value="Validate" class="btnuid"></td></td></tr>

</table>
</form></div>
</body>
</html>
