<?php
$link=mysqli_connect("localhost","root","");
if($link===false)
{
die("error:could not connect.".mysqli_connect_error());
}
$sql = "CREATE DATABASE Demo";
if (mysqli_query($link,$sql)) 
{
  echo "Database created successfully";
} 
else 
{
  echo "could not able to connect $sql".mysqli_error($link);
}
$sql("CREATE TABLE demoo (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(30) NOT NULL,lastname VARCHAR(30)NOT NULL,email VARCHAR(50))");
?>