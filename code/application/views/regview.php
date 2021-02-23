<html>
<head>
<title></title>
<style>
table
{
	padding:20px;
	margin:20px;
	text-align: center;

}
.std
{

	background-image:url("../img/back.jpg");
	background-size:cover;
}
body
{
text-align:center;
margin:20px;
}
tr,td
{
	text-align: center;
	padding:15px;
	margin:15px;
}
fieldset
{
	width: 50px;
	margin-left: 300px;
}
</style>
<body class="std">
	<fieldset>
		<form action="<?php echo base_url()?>main/regviews" method="post">
<table>
<thead>
	<td ><h1>Registeration</h1></td>
</thead>

	<tr><td>firstname:</td><td><input type="text" name="firstname"></br></td></tr>
	<tr><td>lastname:</td><td><input type="text" name="lastname"></br></td></tr>
	<tr><td>Address:</td><td><textarea name="address"></textarea></td></tr>
	<tr><td>district:</td><td><select name="district">
		<option>tvm</option>
		<option>kollam</option>
		<option>pta</option>
		<option>alapuzha</option>
		<option>ekm</option></select>
	<tr><td>pincode:</td><td><input type="text" name="pincode"></br></td></tr>
	<tr><td>phn no:</td><td><input type="text" name="phnno"></br></td></tr>
	<tr><td>dob:</td><td><input type="date" name="dob"></br></td></tr>
	<tr><td>Gender:</td><td><input type="radio" name="gender" value="male">
	<label for="male">male</label>
	<input type="radio" name="gender" value="female">
	<label for="female"> female</label></td></tr>
	<tr><td>higher education:</td><td><input type="text" name="highereducation"></br></td></tr>
	<tr><td>Email:</td><td><input type="email" name="email"></td></tr>
	<tr><td>Password:</td><td><input type="password" name="password"></td></tr>
	<tr><td></td></td><td><input type="submit" value="register" name="submit"></br></td></tr>
	<tr><td></td></td><td><a href="<?php echo base_url()?>main/index">logout</a></br></td></tr>
	</form>
</table>
</fieldset>
</body>
