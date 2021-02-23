<?php
$link=Mysqli_connect("localhost","root","","teacherstudent");
$sq="CREATE TABLE ss(sname varchar(20),email varchar(32))";
if(mysqli_query($link,$sq))
{
echo "create successfully";
}
else{
	echo "could not connect".mysqli_error($link);
}
?>