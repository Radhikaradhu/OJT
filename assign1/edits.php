<?php
$mysql=new mysqli("localhost","root","","studentsdb");


    $id=$_GET['id'];
    $name=$_GET['name'];
    $rollno=$_GET['rollno'];
	$address=$_GET['address'];
	$email=$_GET['email'];
	
    $mysql->query("UPDATE studentdata SET name='$name',rollno='$rollno',address='$address',email='$email' where id='$id'");
     header("Location: view.php");


?>
