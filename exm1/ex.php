<?php
$link=Mysqli_connect("localhost","root","","yuva");
$sq="create table exam(rollno int primary key,sname varchar(20),address varchar(50),email varchar(32))";
if(mysqli_query($link,$sq))
{
echo "create successfully";
}
else{
	echo "could not connect".mysqli_error($link);
}
?>