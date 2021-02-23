<?php
session_start();
$mysql=new mysqli("localhost","root","","smsonline");
if($mysql===false)
{
die("error:could not connect". mysqli_connect_error());
}
$email=$_POST['email'];
$password=$_POST['password'];
$query=$mysql->query("SELECT email,password,usertype,id from login");
$c=0;

while($row=$query->fetch_assoc())
{
if($row['email']==$email)
 {	
	if($row['password']==$password)
	{
		$_SESSION["id"] = $row['id'];
		$c=1;
		if($row['usertype']==2)
		{
		header("location:admin.php");
		}
		else if($row['usertype']==1)
		{
		header("location:teacher.php");
		}
		else
		{
		
		header("location:students.php");
		}	
	}	
 }
}
if($c==0)
{
	echo "Invalid User";
}
?>