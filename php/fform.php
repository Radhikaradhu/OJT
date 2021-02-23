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

<?php
$nameErr = "";
$name ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else 
  {
    $name = test_input($_POST["name"]);
	// check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
  }
  }
  
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<center>
<h2>Registration Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">>
<fieldset>

<table>
<tr>
<td>
Name:</td>
<td><input type="text" name="name" placeholder="Enter your name">
</td>
</tr>
<br>


<td>
Email Id:</td><td><input type="Email" name="email" placeholder="email">
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
if(empty($_POST['name']))
{
echo"name is required";
echo"<br>";
}
else
{
echo $_POST['name'];
echo"<br>";
}

if(empty($_POST['email']))
{
echo"email is required";
echo"<br>";

}
else
{
echo $_POST['email'];
echo"<br>";
}
}
?>
</table>
</body>
</html>