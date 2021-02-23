<?php
$link= mysqli_connect("localhost","root","","smsonline");
if($link===false)
{
die("error:could not connect". mysqli_connect_error());
}
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mark=$_POST['mark'];
$percentage=$_POST['percentage'];
 
$m="insert into mark(fname,lname,mark,percentage)values('$fname','$lname','$mark','$percentage')";
mysqli_query($link,$m);

?>
