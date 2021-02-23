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
p
{
	color:red
}
</style>
<body>
<center>
<h2>Registration Form</h2>
<form method="POST">
<fieldset>
<p>All field are required</p>
<table>
<tr>
<td>
Name:</td>
<td><input type="text" name="name" placeholder="Enter your name">

<?php
if(empty($_POST['name']))
{
echo"name is required";
echo"<br>";
}
else
{
$name=$_POST['name'];
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) 
{
      echo "Only letters and white space allowed";
	  echo"<br>";
}
}
//else
//{
	//echo"$name";
	//echo"<br>";
//}
//}
?>
</td>
</tr>
<br>

<td>
Age:</td>
<td><input type="text" name="age" placeholder="Enter your age">
<?php
if(empty($_POST['age']))
{
echo"age is required";
echo"<br>";
}
//else
//{
//echo $_POST['age'];
//echo"<br>";
//}
?>
</td>
</tr>
<br>



<td>

Email Id:</td><td><input type="Email" name="email" placeholder="email">
<?php
if(empty($_POST['email']))
{
echo"email is required";
echo"<br>";

}
else
{
$email=$_POST['email'];
if (!filter_var($email,FILTER_VALIDATE_EMAIL))
{
echo "invalid email";	
echo"<br>";
}
else
{
	echo"$email";
	echo"<br>";
}
}
?>
</td>
</tr>
<br>
<tr>
<td>
<tr>
<td>
<input type="submit" value="submit" name="submit">
</td>
</tr>
</table>
</fieldset>
</form>
<?php
if(isset($_POST['submit']))
{

 //echo $_POST['name'];
 //echo"<br>";
 //echo $_POST['email'];
 //echo"<br>";
/*if(empty($_POST['name']))
{
echo"name is required";
echo"<br>";
}
else
{
$name=$_POST['name'];

if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) 
{
      echo "Only letters and white space allowed";
	  echo"<br>";
}
else
{
	echo"$name";
	echo"<br>";
}
}


if(empty($_POST['age']))
{
echo"age is required";
echo"<br>";
}
else
{
echo $_POST['age'];
echo"<br>";
}

if(empty($_POST['email']))
{
echo"email is required";
echo"<br>";

}
else
{
$email=$_POST['email'];
if (!filter_var($email,FILTER_VALIDATE_EMAIL))
{
echo "invalid email";	
echo"<br>";
}
else
{
	echo"$email";
	echo"<br>";
}
}*/
//}
}
?>
</table>
</body>
</html>