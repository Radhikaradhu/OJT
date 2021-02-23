<?php
$link=mysqli_connect("localhost","root","");
if($link===false)
{
	die("error:could not connect".mysqli_connect_error());
}
echo "connection_successfully".mysqli_get_host_info($link);

$link=mysqli_connect("localhost","root","");
$sql="CREATE DATABASE view";
if(mysqli_query($link,$sql))
{
echo "database created successfully";
}
else
{
echo "could not connect".mysqli_error($link);
}
$link=mysqli_connect("localhost","root","","reg");
$sqli="CREATE TABLE emp(sname varchar(20),lname varchar(25),email varchar(25))";
if(mysqli_query($link,$sqli))
{
	echo "table created successfully";
	}
	else
	{
		echo "could not connect".mysqli_error($link);
	
		
?>