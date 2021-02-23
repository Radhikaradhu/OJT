<?php
$link=mysqli_connect("localhost","root","","register1");

	$Sname=$_POST['sname'];
	$age=$_POST['age'];
	$email=$_POST['email'];
	$password=$_POST['password'];
$res="insert into register1(sname,age,email,password) values('$name','$age','$email','$password')";
$result=mysqli_query($link,$res);
if($result)
{
	echo"inserted successfully";
}
else
{
    echo "database could not able to connect $result".mysqli_error($link);
}
?>

	
	