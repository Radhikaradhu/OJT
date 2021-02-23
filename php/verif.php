<?php
$link=mysqli_connect("localhost","root","","yuva");
$name=$email="";
$nameErr=$emailError="";
if(isset($_POST['submit']))
{

 //echo $_POST['name'];
 //echo"<br>";
 //echo $_POST['email'];
 //echo"<br>";
if(empty($_POST['name']))
{
$nameErr="name is required";
}
else
{
$name=$_POST['name'];
if(!preg_match("/^[a-zA-Z ]*$/",$name))
{
$nameErr="only letters and spaces"."<br>";

}
else{
echo"$name"."<br>";
}
}

if(empty($_POST['email']))
{
$emailError="email is required";
}
else{
$email=$_POST['email'];
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
$emailError="invalid email";
}
else
{
echo"$email";
}	
}
}



$link=mysqli_connect("localhost","root","","yuva");
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
if(!empty($_POST['name']) && (!$_POST['email']))
{
	if((preg_match("/^[a-zA-Z ]*$/",$name)&&(filter_var($email,FILTER_VALIDATE_EMAIL)))
	{
$result="insert into form_det('name','email')values('$name','$email')";
mysqli_query($link,$result);
	}
	
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<style>

input,textarea
{
padding:10px;
margin:10px;
text-align: center;
}
fieldset
{

width:300px;
height:400px;

}
form h2
{
margin-left: 300px;
}
table
{
text-align: center;
}
.error{
color:red;
}
</style>
<body>
<center>
<h2>Registration Form</h2>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
<fieldset>
<table>
<tr>
<td>
Name:</td>
<td><input type="text" name="name" placeholder="Enter your name" value="<?php echo $name;?>">
<span class="error">* <?php echo $nameErr; ?></span>
</td>
</tr>
<br>
<td>
Email Id:</td><td><input type="text" name="email" placeholder="email" value="<?php echo $email;?>">
<span class="error">* <?php echo $emailError; ?></span>
</td>
</tr>
<br>

<tr>
<td>
<input type="submit" value="submit" name="submit">
</td>
</tr>
</table>
</fieldset>
</form>

</body>
</html>
