<?php
$link=mysqli_connect("localhost","root","","yuva");
$name=$address=$phonenumber=$gender=$email=$password="";
$nameErr=$addressErr=$phonenumberErr=$genderErr=$emailErr=$passwordErr="";
if(isset($_POST['submit']))
{

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
}
//mob num validation
if(empty($_POST['phonenumber']))
{
$phonenumberErr="mobile number is required";
}
else
{
$phonenumber=$_POST['phonenumber'];
if (!preg_match ("/^[0-9]*$/", $phonenumber) )
{  
    $phonenumberErr = "Only numeric value is allowed.";  
     
}
if(strlen($phonenumber)!=10)
{
$phonenumberErr="mobile number must contain only 10 digits";
}
}
//gender validation
if(empty($_POST['gender']))
{
$genderErr="Gender is required";
}
// email validation
if(empty($_POST['email']))
{
$emailErr="email is required";
}
else{
$email=$_POST['email'];
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
$emailErr="invalid email";
}
}
if($nameErr=="" && $addressErr=="" && $phonenumberErr=="" && $genderErr=="" && $emailErr=="")
{
$name=$_POST['name'];
$address=$_POST['address'];
$phonenumber=$_POST['phonenumber'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];
$qry="INSERT INTO tablelog(name,address,phonenumber,gender,email,password) values('$name','$address','$phonenumber','$gender','$email','$password')";
mysqli_query($link,$qry);
}

}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
table{
border: 2px solid;
padding:30px;
margin:10px;
text-align: center;
}
input{
padding-right: 20px;
margin-top:20px;
text-align: justify;
}
form{
align:center;
margin:0 auto;
width:340px;
}
.error{
color: red;
}
</style>
</head>
<body>
<form method="post" action="formvalidation.php">
<table>
<th>
<td><h1>Registration</h1></td>
</th>
<tr>
<td>Name:</td>
<td><input type="name" name="name" value="<?php echo $name;?>">
<span class="error">* <?php echo "$nameErr";?></span></td>
</tr>
<tr>
<td>Address:</td>
<td><textarea name="address" placeholder="address"></textarea></td>
</tr>
<tr>
<td>Phonenumber:</td>
<td><input type="text" name="phonenumber" value="<?php echo $phonenumber;?>">
<span class="error">* <?php echo "$phonenumberErr";?></span></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="radio" name="gender" value="male"> Male  
    <input type="radio" name="gender" value="female"> Female
    <span class="error">* <?php echo "$genderErr";?></span>  
</td>
</tr>

<tr>
<td>Email id:</td>
<td><input type="text" name="email"  value="<?php echo $email;?>">
<span class="error">* <?php echo "$emailErr";?></span></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Register"></td>
</tr>
</table>
</form>
</body>
</html>

