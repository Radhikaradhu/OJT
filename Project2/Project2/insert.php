<?php
$link=mysqli_connect("localhost","root","","studs");
$Firstname=$_GET['fname'];
$Lastname=$_GET['lname'];
$email=$_GET['email'];
$result="insert into students(firstname,Lastname,email)values('','$Firstname','$Lastname','$email')";
if(mysqli_query($link,$result))
{
	echo "value inserted successfully";
}
else
{
	echo "could not insert".mysqli_error($link);
}
header("Location:reg.php");
?>