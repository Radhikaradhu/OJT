<?php
$link=mysqli_connect("localhost","root","","reg");
$id=$_GET['id'];
$name=$_GET['name'];
$no=$_GET['num'];
$address=$_GET['address'];
$email=$_GET['email'];
$pass=$_GET['pass'];
$result="insert into tchr(id,empname,empno,empaddress,empemail,emppassword)values('$id','$name','$no','$address','$email','$pass')";
if(mysqli_query($link,$result))
{
	echo "value inserted successfully";
}
else
{
	echo "could not insert".mysqli_error($link);
}
?>