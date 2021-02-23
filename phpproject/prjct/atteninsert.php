
<?php
$link= mysqli_connect("localhost","root","","smsonline");
if($link===false)
{
die("error:could not connect". mysqli_connect_error());
}
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dayt=$_POST['dayt'];
$percentage=$_POST['percentage'];
 
$att="insert into attendance(fname,lname,dayt,percentage)values('$fname','$lname','$dayt','$percentage')";
mysqli_query($link,$att);

?>
