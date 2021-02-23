<?php
$link=mysqli_connect("localhost","root","","tchreg");
$sqli="CREATE TABLE tchr(id int(5) primary key,name varchar(20),no int(5),address varchar(25),email varchar(25),password varchar(25))";
if(mysqli_query($link,$sqli))
{
	echo "table created successfully";
	}
	else
	{
		echo "could not connect".mysqli_error($link);
		}
?>
	
