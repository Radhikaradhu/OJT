<?php
$link=mysqli_connect("localhost","root","","studs");
$slno=$_GET['id'];
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$email=$_GET['email'];
$sq="update students set firstname='$fname',Lastname='$lname',email='$email' where slno='$slno'";
if(mysqli_query($link,$sq))
{
	echo "updated successfully";
	}
	else
	{
		echo "could not update".mysqli_error($link);
		}
?>