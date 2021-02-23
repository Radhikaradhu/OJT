<?php
$link=mysqli_connect("localhost","root","");
$sql="CREATE DATABASE reg";
if(mysqli_query($link,$sql))
{
echo "database created successfully";
}
else
{
echo "could not connect".mysqli_error($link);
}
?>