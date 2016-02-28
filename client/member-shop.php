<?php

	require_once('auth.php');
	$connect = mysql_connect("localhost", "admin", "yahoo");
mysql_select_db("user_db"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Shopping Cart | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
<div class="smenu"><div class="spacer"> </div><div class="bank"><a href="member-banking.php"><img src="images/bank_2.png"></img></a></div><div class="spacer"></div>
<div class="market"><a href="member-market.php"><img src="images/market_2.png"></img></a></div><div class="spacer"> </div>
<div class="shop"><a href="member-shop.php"><img src="images/shop_2.png"></img></a></div><div class="spacer"> </div>
<div class="ticket"><a href="member-ticket.php"><img src="images/ticket_2.png"></img></a></div><div class="spacer"></div>
<div class="health"><a href="member-health.php"><img src="images/health_2.png"></img></a></div><div class="spacer"> </div>
</div>

 <?php 
 $result = mysql_query("SELECT tip_id FROM tip_tab order by tip_id desc limit 1");
$results = mysql_query($query);
$r=mysql_fetch_array($result);
$mid=$r["tip_id"];
$ran=rand('1',$mid);
 
$result = mysql_query("select * from tip_tab where tip_id='$ran'"); 
$r=mysql_fetch_array($result);
$tip_head=$r["tip_head"];
$tip_content=$r["tip_content"];

echo '<div class="boxexpand2"><h3>Tip Of The Day</h3><h4>',$tip_head,'</h4>',$tip_content,'</div>';

?>

<div class="bmenu"><a href="member-index.php">Home</a> | <a href="shop-log.php">Shopping Logs</a> | <a href="logout.php">Logout</a></div>
<div class="boxexpand"><div class="borderbox">
<h2>Shopping Central</h2><hr>
<div class="searchfloat"><form action="" method="POST"><select id="filter" name="filter" class="textfield">
<option value="all" selected>Filter</option>
 <option value="Stationary">Stationary</option>
 <option value="Foods">Foods</option>
 <option value="Fruits and Vegetables">Fruits and Vegetables</option>
 <option value="Bakery">Bakery</option>
 <option value="Pharmaceuticals">Pharmaceuticals</option> 
 <option value="Gadgets">Gadgets</option>
 <option value="Lifestyle">Lifestyle</option>
 <option value="Books">Books</option>
 <option value="Others">Others</option>
<option value="all">Full List</option>
 <input type="submit" value="Go" class="btngo"></form></div>
<?php
$uidd = $_SESSION['SESS_MEMBER_ID'];
$count=0;
$filter=$_POST["filter"];


if($filter=='all'||$filter==""||empty($filter))
{
$result = mysql_query("select * from udetails_shop order by id");
while($r=mysql_fetch_array($result))
{
$pid = $r["id"];
$name = $r["pname"];
$type = $r["category"];
$stock = $r["stock"];
$rate = $r["price"];
$decr = $r["descrpt"];
$url = $r["imgurl"];

if($count==0)
{$count=1;
echo '<table><tr><td>';
echo '<table class="odd"><tr><td></td><td><img src="../uploaded_images/',$url,'" alt="',$url,'" class="imgbox"></img></td></tr>';
echo '<tr><td>Item: </td><td>',$name,'</td></tr>';
  echo '<tr><td>Item id#: </td><td>',$pid,'</td></tr>';
   echo '<tr><td>Category: </td><td>',$type,'</td></tr>';
   if($stock>0) {
    echo '<tr><td>Stock: </td><td>',$stock,'</td></tr>'; } else {
	echo '<tr><td>Stock: </td><td><div class="err">SOLD OUT</div></td></tr>';}
	 echo '<tr><td>Price: </td><td>',$rate,'</td></tr>';
	 echo '<tr><td>More info: </td><td>',$decr,'</td></tr>';
	 echo '<tr><td></td><td class="formfieldright"><form action="buy-exec.php" method="POST"><input type="hidden" name="item" value="',$pid,'"><input type="submit" value=" " title="Buy Now" class="btnbuy"></form></td></tr>';
	 echo'</table>';
	 
}

else if($count==1)
{$count=2;
echo '</td><td>';
echo '<table class="even"><tr><td></td><td><img src="../uploaded_images/',$url,'" alt="',$url,'" class="imgbox"></img></td></tr>';
echo '<tr><td>Item: </td><td>',$name,'</td></tr>';
  echo '<tr><td>Item id#: </td><td>',$pid,'</td></tr>';
   echo '<tr><td>Category: </td><td>',$type,'</td></tr>';
    if($stock>0) {
    echo '<tr><td>Stock: </td><td>',$stock,'</td></tr>'; } else {
	echo '<tr><td>Stock: </td><td><div class="err">SOLD OUT</div></td></tr>';}
	 echo '<tr><td>Price: </td><td>',$rate,'</td></tr>';
	 echo '<tr><td>More info: </td><td>',$decr,'</td></tr>';
	 echo '<tr><td></td><td class="formfieldright"><form action="buy-exec.php" method="POST"><input type="hidden" name="item" value="',$pid,'"><input type="submit" value=" " title="Buy Now" class="btnbuy"></form></td></tr>';
	 echo'</table>';
}

else if($count==2)
{$count=0;
echo '</td><td>';
echo '<table class="odd"><tr><td></td><td><img src="../uploaded_images/',$url,'" alt="',$url,'" class="imgbox"></img></td></tr>';
echo '<tr><td>Item: </td><td>',$name,'</td></tr>';
  echo '<tr><td>Item id#: </td><td>',$pid,'</td></tr>';
   echo '<tr><td>Category: </td><td>',$type,'</td></tr>';
    if($stock>0) {
    echo '<tr><td>Stock: </td><td>',$stock,'</td></tr>'; } else {
	echo '<tr><td>Stock: </td><td><div class="err">SOLD OUT</div></td></tr>';}
	 echo '<tr><td>Price: </td><td>',$rate,'</td></tr>';
	 echo '<tr><td>More info: </td><td>',$decr,'</td></tr>';
	 echo '<tr><td></td><td class="formfieldright"><form action="buy-exec.php" method="POST"><input type="hidden" name="item" value="',$pid,'"><input type="submit" value="  " title="Buy Now" class="btnbuy"></form></td></tr>';
	 echo'</table>';
	 echo '</td></tr></table><hr>';
}
else {$count=0;}


	}


}
else {
$result = mysql_query("select * from udetails_shop where category='$filter'");
while($r=mysql_fetch_array($result))
{
$pid = $r["id"];
$name = $r["pname"];
$type = $r["category"];
$stock = $r["stock"];
$rate = $r["price"];
$decr = $r["descrpt"];
$url = $r["imgurl"];

if($count==0)
{$count=1;
echo '<table><tr><td>';
echo '<table class="odd"><tr><td></td><td><img src="../uploaded_images/',$url,'" alt="',$url,'" class="imgbox"></img></td></tr>';
echo '<tr><td>Item: </td><td>',$name,'</td></tr>';
  echo '<tr><td>Item id#: </td><td>',$pid,'</td></tr>';
   echo '<tr><td>Category: </td><td>',$type,'</td></tr>';
   if($stock>0) {
    echo '<tr><td>Stock: </td><td>',$stock,'</td></tr>'; } else {
	echo '<tr><td>Stock: </td><td><div class="err">SOLD OUT</div></td></tr>';}
	 echo '<tr><td>Price: </td><td>',$rate,'</td></tr>';
	 echo '<tr><td>More info: </td><td>',$decr,'</td></tr>';
	 echo '<tr><td></td><td class="formfieldright"><form action="buy-exec.php" method="POST"><input type="hidden" name="item" value="',$pid,'"><input type="submit" value=" " title="Buy Now" class="btnbuy"></form></td></tr>';
	 echo'</table>';
	 
}

else if($count==1)
{$count=2;
echo '</td><td>';
echo '<table class="even"><tr><td></td><td><img src="../uploaded_images/',$url,'" alt="',$url,'" class="imgbox"></img></td></tr>';
echo '<tr><td>Item: </td><td>',$name,'</td></tr>';
  echo '<tr><td>Item id#: </td><td>',$pid,'</td></tr>';
   echo '<tr><td>Category: </td><td>',$type,'</td></tr>';
    if($stock>0) {
    echo '<tr><td>Stock: </td><td>',$stock,'</td></tr>'; } else {
	echo '<tr><td>Stock: </td><td><div class="err">SOLD OUT</div></td></tr>';}
	 echo '<tr><td>Price: </td><td>',$rate,'</td></tr>';
	 echo '<tr><td>More info: </td><td>',$decr,'</td></tr>';
	 echo '<tr><td></td><td class="formfieldright"><form action="buy-exec.php" method="POST"><input type="hidden" name="item" value="',$pid,'"><input type="submit" value=" " title="Buy Now" class="btnbuy"></form></td></tr>';
	 echo'</table>';
}

else if($count==2)
{$count=0;
echo '</td><td>';
echo '<table class="odd"><tr><td></td><td><img src="../uploaded_images/',$url,'" alt="',$url,'" class="imgbox"></img></td></tr>';
echo '<tr><td>Item: </td><td>',$name,'</td></tr>';
  echo '<tr><td>Item id#: </td><td>',$pid,'</td></tr>';
   echo '<tr><td>Category: </td><td>',$type,'</td></tr>';
    if($stock>0) {
    echo '<tr><td>Stock: </td><td>',$stock,'</td></tr>'; } else {
	echo '<tr><td>Stock: </td><td><div class="err">SOLD OUT</div></td></tr>';}
	 echo '<tr><td>Price: </td><td>',$rate,'</td></tr>';
	 echo '<tr><td>More info: </td><td>',$decr,'</td></tr>';
	 echo '<tr><td></td><td class="formfieldright"><form action="buy-exec.php" method="POST"><input type="hidden" name="item" value="',$pid,'"><input type="submit" value="  " title="Buy Now" class="btnbuy"></form></td></tr>';
	 echo'</table>';
	 echo '</td></tr></table><hr>';
}
else {$count=0;}


	}


}

while($r=mysql_fetch_array($result))
{
$pid = $r["id"];
$name = $r["pname"];
$type = $r["category"];
$stock = $r["stock"];
$rate = $r["price"];
$decr = $r["descrpt"];
$url = $r["imgurl"];

if($count==0)
{$count=1;
echo '<table><tr><td>';
echo '<table class="odd"><tr><td></td><td><img src="../uploaded_images/',$url,'" alt="',$url,'" class="imgbox"></img></td></tr>';
echo '<tr><td>Item: </td><td>',$name,'</td></tr>';
  echo '<tr><td>Item id#: </td><td>',$pid,'</td></tr>';
   echo '<tr><td>Category: </td><td>',$type,'</td></tr>';
   if($stock>0) {
    echo '<tr><td>Stock: </td><td>',$stock,'</td></tr>'; } else {
	echo '<tr><td>Stock: </td><td><div class="err">SOLD OUT</div></td></tr>';}
	 echo '<tr><td>Price: </td><td>',$rate,'</td></tr>';
	 echo '<tr><td>More info: </td><td>',$decr,'</td></tr>';
	 echo '<tr><td></td><td class="formfieldright"><form action="buy-exec.php" method="POST"><input type="hidden" name="item" value="',$pid,'"><input type="submit" value=" " title="Buy Now" class="btnbuy"></form></td></tr>';
	 echo'</table>';
	 
}

else if($count==1)
{$count=2;
echo '</td><td>';
echo '<table class="even"><tr><td></td><td><img src="../uploaded_images/',$url,'" alt="',$url,'" class="imgbox"></img></td></tr>';
echo '<tr><td>Item: </td><td>',$name,'</td></tr>';
  echo '<tr><td>Item id#: </td><td>',$pid,'</td></tr>';
   echo '<tr><td>Category: </td><td>',$type,'</td></tr>';
    if($stock>0) {
    echo '<tr><td>Stock: </td><td>',$stock,'</td></tr>'; } else {
	echo '<tr><td>Stock: </td><td><div class="err">SOLD OUT</div></td></tr>';}
	 echo '<tr><td>Price: </td><td>',$rate,'</td></tr>';
	 echo '<tr><td>More info: </td><td>',$decr,'</td></tr>';
	 echo '<tr><td></td><td class="formfieldright"><form action="buy-exec.php" method="POST"><input type="hidden" name="item" value="',$pid,'"><input type="submit" value=" " title="Buy Now" class="btnbuy"></form></td></tr>';
	 echo'</table>';
}

else if($count==2)
{$count=0;
echo '</td><td>';
echo '<table class="odd"><tr><td></td><td><img src="../uploaded_images/',$url,'" alt="',$url,'" class="imgbox"></img></td></tr>';
echo '<tr><td>Item: </td><td>',$name,'</td></tr>';
  echo '<tr><td>Item id#: </td><td>',$pid,'</td></tr>';
   echo '<tr><td>Category: </td><td>',$type,'</td></tr>';
    if($stock>0) {
    echo '<tr><td>Stock: </td><td>',$stock,'</td></tr>'; } else {
	echo '<tr><td>Stock: </td><td><div class="err">SOLD OUT</div></td></tr>';}
	 echo '<tr><td>Price: </td><td>',$rate,'</td></tr>';
	 echo '<tr><td>More info: </td><td>',$decr,'</td></tr>';
	 echo '<tr><td></td><td class="formfieldright"><form action="buy-exec.php" method="POST"><input type="hidden" name="item" value="',$pid,'"><input type="submit" value="  " title="Buy Now" class="btnbuy"></form></td></tr>';
	 echo'</table>';
	 echo '</td></tr></table><hr>';
}
else {$count=0;}


	}


 
 ?>
 
 </div></div>

 </body>
</html>