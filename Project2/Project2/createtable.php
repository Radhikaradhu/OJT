<?php
$link=mysqli_connect("localhost","root","","studs");
$sqli="CREATE TABLE students(slno int(5) primary key,firstname varchar(20),Lastname varchar(25),email varchar(25))";
if(mysqli_query($link,$sqli))
{
	echo "table created successfully";
	}
	else
	{
		echo "could not connect".mysqli_error($link);
		}
?>
	
