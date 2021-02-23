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
.tch
{

	background-image:url("../img/5.jpg");
	background-size:cover;
	color: white; 
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
<body class="tch">
	<fieldset>
		<form action="<?php echo base_url()?>main/updates" method="post">
<table>
<thead>
	<td ><h1>Registeration</h1></td>
</thead>
<?php
if(isset($user_data))
{
	foreach ($user_data->result() as $row1)
	 {
		?>

	<tr><td>firstname:</td><td><input type="text" name="firstname" value="<?php echo $row1->firstname;?>"></br></td></tr>
	<tr><td>lastname:</td><td><input type="text" name="lastname" value="<?php echo $row1->lastname;?>"></br></td></tr>
	<tr><td>Address:</td><td><textarea name="address"><?php echo $row1->address;?></textarea></td></tr>
	<tr><td>district:</td><td><input type="text" name="district" value="<?php echo $row1->district;?>">
	<tr><td>pincode:</td><td><input type="text" name="pincode" value="<?php echo $row1->pincode;?>"></br></td></tr>
	<tr><td>phonenumber:</td><td><input type="text" name="phonenumber" value="<?php echo $row1->phonenumber;?>"></br></td></tr>
	<tr><td>Gender:</td><td><input type="text" name="gender" value="<?php echo $row1->gender;?>">
	<tr><td>dob:</td><td><input type="text" name="dob" value="<?php echo $row1->dob;?>"></br></td></tr>
	<tr><td>higher education:</td><td><input type="text" name="highereducation" value="<?php echo $row1->highereducation;?>"></br></td></tr>
	<tr><td>Email:</td><td><input type="email" name="email" value="<?php echo $row1->email;?>"></td></tr>
	<tr><td></td></td><td><input type="submit" value="register" name="updates"></br></td></tr>
	<tr><td></td></td><td><a href="<?php echo base_url()?>main/index">logout</a></br></td></tr>
	<?php
	}
}
	?>
</table>
</form>
</body>
</html>