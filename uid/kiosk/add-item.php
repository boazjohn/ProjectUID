<?php

	require_once('auth.php');

$connect = mysql_connect("localhost", "admin", "yahoo");

//define a maxim size for the uploaded images in Kb
 define ("MAX_SIZE","1000"); 
 $count=0;
 
$create = mysql_query("CREATE DATABASE IF NOT EXISTS user_db") or die(mysql_error());
mysql_select_db("user_db");
$admin = "CREATE TABLE IF NOT EXISTS udetails_shop(
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
uid_id varchar(255) NOT NULL,
imgurl varchar(1024) NOT NULL,
pname varchar(255) NOT NULL,
category varchar(255) NOT NULL,
stock varchar(255) NOT NULL,
price varchar(255) NOT NULL,
descrpt varchar(1024) NOT NULL
)";
$result = mysql_query($admin) or die(mysql_error());

//This function reads the extension of the file. It is used to determine if the file  is an image by checking the extension.
 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }

//This variable is used as a flag. The value is initialized with 0 (meaning no error  found)  
//and it will be changed to 1 if an errro occures.  

 $errors=0;
//checks if the form has been submitted
 if(isset($_POST['Submit'])) 
 {
 	//reads the name of the file the user submitted for uploading
 	$image=$_FILES['image']['name'];
 	//if it is not empty
 	if ($image) 
 	{
 	//get the original name of the file from the clients machine
 		$filename = stripslashes($_FILES['image']['name']);
 	//get the extension of the file in a lower case format
  		$extension = getExtension($filename);
 		$extension = strtolower($extension);
 	//if it is not a known extension, we will suppose it is an error and will not  upload the file,  
	//otherwise we will do more tests
 if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
 		{
		//print error message
 			echo '<h4>Unknown extension!</h4>';
 			$errors=1;
 		}
 		else
 		{
//get the size of the image in bytes
 //$_FILES['image']['tmp_name'] is the temporary filename of the file
 //in which the uploaded file was stored on the server
 $size=filesize($_FILES['image']['tmp_name']);

//compare the size with the maxim size we defined and print error if bigger
if ($size > MAX_SIZE*1024)
{
	echo '<h4>You have exceeded the size limit!</h4>';
	$errors=1;
}

//we will give an unique name, for example the time in unix time format
$image_name=time().'.'.$extension;
//the new name will be containing the full path where will be stored (images folder)
$newname="../uploaded_images/".$image_name;

$copied = copy($_FILES['image']['tmp_name'], $newname);
if (!$copied) 
{
	echo '<h4>Copy unsuccessfull!</h4>';
	$errors=1;
}}}}

//If no errors registred, print the success message
 if(isset($_POST['Submit']) && !$errors) 
 {
 
	$uidd=$_SESSION['SESS_MEMBER_ID'];
    $insert = "INSERT INTO udetails_shop (uid_id,imgurl) ".
			"VALUES ('$uidd', '$image_name')";
			$results = mysql_query($insert) or die(mysql_error());
			$count=1;
			$result = mysql_query("select * from udetails_shop order by id DESC LIMIT 1");
			$r=mysql_fetch_array($result);
			$pid=$r["id"];

			
			
 }

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Citizen Details | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Item Management</h1>

<div class="bmenu"><a href="member-index.php">Home</a> |  <a href="add-item.php">Add Item</a> |  <a href="shop-manage.php">Manage Items</a> | <a href="logout.php">Logout</a></div>

<div class="tspacemid">
<h2>Add a New Item</h2><hr><br><br>
<?php if($count!=1)
{ ?>
 <form name="newad" method="post" enctype="multipart/form-data"  action="">
 <table>
 	<tr><td class="formfieldright">Choose image </td><td><input type="file" name="image">
 	<input name="Submit" type="submit" value="Upload image" class="btnuid"></td></tr>
	
 </form> <?php } 
 else {
 echo '<img src="../uploaded_images/',$image_name,'" alt="',$image_name,'" class="imgbox"></img><table>';
 } ?>
 
 <form name="form2" method="post" action="add-item-exec.php">
<input type="hidden" name="pid" value="<?php echo $pid; ?>">
<input type="hidden" name="imgurl" value="<?php echo $image_name; ?>">
 <tr><td class="formfieldright">Item Name </td><td><input type="text" name="name" class="textfield"></td></tr>
 <tr><td class="formfieldright">Category </td><td> 
 <select id="type" name="type" class="textfield6"><option value="" selected>-- Select category --</option>
 <option value="Stationary">Stationary</option>
 <option value="Foods">Foods</option>
 <option value="Fruits and Vegetables">Fruits and Vegetables</option>
 <option value="Bakery">Bakery</option>
 <option value="Pharmaceuticals">Pharmaceuticals</option> 
 <option value="Gadgets">Gadgets</option>
 <option value="Lifestyle">Lifestyle</option>
 <option value="Books">Books</option>
 <option value="Others">Others</option>
 </td></tr>
  <tr><td class="formfieldright">Stock </td><td><input type="text" name="stock" class="textfield"></td></tr>
 <tr><td class="formfieldright">Price </td><td><input type="text" name="rate" class="textfield"></td></tr>
 <tr><td class="formfieldright">Comments </td><td><textarea name="descr" id="descr" class="textfield"></textarea></td></tr>
  <tr><td></td><td align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" value="Add Item" name="add" class="btnuid"></td></tr>
  </table>
 </div>
 </body>
</html>
  