<?php
$mysql=new mysqli("localhost","root","","yuva");
$uname=$_GET['name'];
$upass =$_GET['password'];
$result=$mysql->query("insert into yuva_ker(user_name,user_password) values ('$uname','$upass')");
header("Location:index.php");
?>