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
$qua=$_POST['qua'];
$email=$_POST['email'];
$password=$_POST['password'];
 
$ql="insert into treg(fname,lname,gname,dob,gender,address,district,pincode,mobile,email,password)values('$fname','$lname','$gname','$dob','$gender','$address','$district','$pincode','$mobile','$email','$password')";
mysqli_query($link,$ql);

$sql="insert into login(email,password,usertype)values('$email','$password',1)";
mysqli_query($link,$sql);


?>
