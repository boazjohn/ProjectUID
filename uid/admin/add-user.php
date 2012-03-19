<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Citizen Details | UID</title>
<link href="module.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="cleanValidator.js">
</script>
</head>
<body>
<h1> Create New Unique ID</h1>
<div class="bmenu"><a href="member-index.php">Home</a> | <a href="add-user.php">Create New UID</a> | <a href="list-data.php">List UID</a> | <a href="edit.php">Edit UID</a> | <a href="manage.php">Manage Portal</a> | <a href="logout.php">Logout</a></div>

<div class="tspace">
<h2>Basic Details</h2><hr>
<form id="uid" method="post" action="add.php">
<table class="auto"><tr><td class="formfieldright">First name <input type="text" id="fname" name="fname" class="textfield"></td><td class="formfieldrightmod">
	<input type="text"  id="lname" name="lname" class="textfield"> Last name </td></tr>
<tr><td class="formfieldright">
 DOB <select id="dd" name="dd" class="textfield2">
	<option value="" selected>DD</option>
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
	<option value="" selected>MM</option>
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
	<option value="" selected>YYYY</option>
	<option value="1900" >1900</option>
	<option value="1901" >1901</option>
	<option value="1902" >1902</option>
	<option value="1903" >1903</option>
	<option value="1904" >1904</option>
	<option value="1905" >1905</option>
	<option value="1906" >1906</option>
	<option value="1907" >1907</option>
	<option value="1908" >1908</option>
	<option value="1909" >1909</option>
	<option value="1910" >1910</option>
	<option value="1911" >1911</option>
	<option value="1912" >1912</option>
	<option value="1913" >1913</option>
	<option value="1914" >1914</option>
	<option value="1915" >1915</option>
	<option value="1916" >1916</option>
	<option value="1917" >1917</option>
	<option value="1918" >1918</option>
	<option value="1919" >1919</option>
	<option value="1920" >1920</option>
	<option value="1921" >1921</option>
	<option value="1922" >1922</option>
	<option value="1923" >1923</option>
	<option value="1924" >1924</option>
	<option value="1925" >1925</option>
	<option value="1926" >1926</option>
	<option value="1927" >1927</option>
	<option value="1928" >1928</option>
	<option value="1929" >1929</option>
	<option value="1930" >1930</option>
	<option value="1931" >1931</option>
	<option value="1932" >1932</option>
	<option value="1933" >1933</option>
	<option value="1934" >1934</option>
	<option value="1935" >1935</option>
	<option value="1936" >1936</option>
	<option value="1937" >1937</option>
	<option value="1938" >1938</option>
	<option value="1939" >1939</option>
	<option value="1940" >1940</option>
	<option value="1941" >1941</option>
	<option value="1942" >1942</option>
	<option value="1943" >1943</option>
	<option value="1944" >1944</option>
	<option value="1945" >1945</option>
	<option value="1946" >1946</option>
	<option value="1947" >1947</option>
	<option value="1948" >1948</option>
	<option value="1949" >1949</option>
	<option value="1950" >1950</option>
	<option value="1951" >1951</option>
	<option value="1952" >1952</option>
	<option value="1953" >1953</option>
	<option value="1954" >1954</option>
	<option value="1955" >1955</option>
	<option value="1956" >1956</option>
	<option value="1957" >1957</option>
	<option value="1958" >1958</option>
	<option value="1959" >1959</option>
	<option value="1960" >1960</option>
	<option value="1961" >1961</option>
	<option value="1962" >1962</option>
	<option value="1963" >1963</option>
	<option value="1964" >1964</option>
	<option value="1965" >1965</option>
	<option value="1966" >1966</option>
	<option value="1967" >1967</option>
	<option value="1968" >1968</option>
	<option value="1969" >1969</option>
	<option value="1970" >1970</option>
	<option value="1971" >1971</option>
	<option value="1972" >1972</option>
	<option value="1973" >1973</option>
	<option value="1974" >1974</option>
	<option value="1975" >1975</option>
	<option value="1976" >1976</option>
	<option value="1977" >1977</option>
	<option value="1978" >1978</option>
	<option value="1979" >1979</option>
	<option value="1980" >1980</option>
	<option value="1981" >1981</option>
	<option value="1982" >1982</option>
	<option value="1983" >1983</option>
	<option value="1984" >1984</option>
	<option value="1985" >1985</option>
	<option value="1986" >1986</option>
	<option value="1987" >1987</option>
	<option value="1988" >1988</option>
	<option value="1989" >1989</option>
	<option value="1990" >1990</option>
	<option value="1991" >1991</option>
	<option value="1992" >1992</option>
	<option value="1993" >1993</option>
	<option value="1994" >1994</option>
	<option value="1995" >1995</option>
	<option value="1996" >1996</option>
	<option value="1997" >1997</option>
	<option value="1998" >1998</option>
	<option value="1999" >1999</option>
	<option value="2000" >2000</option>
	<option value="2001" >2001</option>
	<option value="2002" >2002</option>
	<option value="2003" >2003</option>
	<option value="2004" >2004</option>
	<option value="2005" >2005</option>
	<option value="2006" >2006</option>
	<option value="2007" >2007</option>
	<option value="2008" >2008</option>
	<option value="2009" >2009</option>
	<option value="2010" >2010</option>
	</select></td>
	<td class="formfieldrightmod">
	<select id="sex" name="sex" class="textfield3">
	<option value="" selected>--Select--</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select> Sex 
</td></tr>
<tr><td class="formfieldright">Address Line 1
	<input type="text" id="add1" name="add1" class="textfield"></td><td class="formfieldrightmod">
	<input type="text" id="add2" name="add2" class="textfield"> Address Line 2</td></tr>

<tr><td class="formfieldright">Address Line 3
	<input type="text" id="add3" name="add3" class="textfield"></td><td class="formfieldrightmod">
	<input type="text" id="pin" name="pin" class="textfield"> Pincode</td></tr>

<tr><td class="formfieldright">Panchayath
<input type="text" id="panc" name="panc" class="textfield"></td><td class="formfieldrightmod">
	<input type="text" id="tal" name="tal" class="textfield"> Taluk</td></tr>

<tr><td class="formfieldright">State <select id="state" name="state" class="textfield3">
                                      <option value="" selected="selected">--Select a State--</option>                                      
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
	<option value="" selected>--Select a district--</option>
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
	<input type="text" id="phno" name="phno" class="textfield"></td><td  class="formfieldrightmod">
	<input type="text" id="email" name="email" class="textfield"> email</td></tr>
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

	<tr align="center" height="70px"><td></td><td><input type="submit" name="add" value="Create UID" class="btnuid"></td></tr>

</table></div>
</form></div>
</body>
</html>
