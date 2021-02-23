<?php
$link=mysqli_connect("localhost","root","","techstud");
$sqli="CREATE TABLE teacher(id int(5) primary key,name varchar(20),address varchar(25), distric varchar(25),pincode int(10), phonenumber int(20),gender varchar(20), age int(20),subject varchar(20),email varchar(25),password varchar(25))";
if(mysqli_query($link,$sqli))
{
	echo "table created successfully";
	}
	else
	{
		echo "could not connect".mysqli_error($link);
		}
?>