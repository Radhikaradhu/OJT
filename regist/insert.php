<?php
$link=mysqli_connect("localhost","root","","reg");
$id=$_GET['id'];
$empname=$_GET['name'];
$empno=$_GET['num'];
$empaddress=$_GET['address'];
$empemail=$_GET['email'];
$emppass=$_GET['pass'];
$result="insert into employees(id,empname,empno,empaddress,empemail,emppassword)values('$id','$empname','$empno','$empaddress','$empemail','$emppass')";
if(mysqli_query($link,$result))
{
	echo "value inserted successfully";
}
else
{
	echo "could not insert".mysqli_error($link);
}
?>