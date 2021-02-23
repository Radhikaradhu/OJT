<?php
$link=Mysqli_connect("localhost","root","","exam");
$sq="CREATE TABLE studentdata(rollno int primary key,student_name varchar(20),student_address varchar(50),student_email varchar(32))";
if(mysqli_query($link,$sq))
{
echo "create successfully";
}
else{
	echo "could not connect".mysqli_error($link);
}
?>