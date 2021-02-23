<?php
$link=Mysqli_connect("localhost","root","");
if($link===false)
{
	die("Error:could not connect..".mysqli_connect_error());
	
}
$sql="CREATE DATABASE studentsdb";
if(mysqli_query($link,$sql))
{
echo "Database created successfully";
}
else{
	echo "could not connect".mysqli_error($link);
}
?>