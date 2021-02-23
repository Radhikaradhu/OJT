<?php
$link=mysqli_connect("localhost","root","","techstud");
$name=$_GET['name'];
$address=$_GET['address'];
$distric=$_GET['distric'];
$pincode=$_GET['pincode'];
$phonenumber=$_GET['phonenumber'];
$gender=$_GET['gender'];
$age=$_GET['age'];
$subject=$_GET['subject'];
$email=$_GET['email'];
$result="insert into teacher(name,address,distric,pincode,phonenumber,gender,age,subject,email)values('$name','$address','$distric','$pincode','$phonenumber','$gender','$age','$subject','$email',)";
if(mysqli_query($link,$result))
{
	echo "value inserted successfully";
}
else
{
	echo "could not insert".mysqli_error($link);
}
header("Location:teacherform.php");
?>