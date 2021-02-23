<?php
$link= mysqli_connect("localhost","root","","smsonline");
if($link===false)
{
die("error:could not connect". mysqli_connect_error());
}
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gname=$_POST['gname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$district=$_POST['district'];
$pincode=$_POST['pincode'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
 
$stql="insert into sreg(fname,lname,gname,dob,gender,address,district,pincode,mobile,email,password)values('$fname','$lname','$gname','$dob','$gender','$address','$district','$pincode','$mobile','$email','$password')";
mysqli_query($link,$stql);

$stsql="insert into login(email,password,usertype)values('$email','$password',0)";
mysqli_query($link,$stsql);
header("location:logs.php");

?>
