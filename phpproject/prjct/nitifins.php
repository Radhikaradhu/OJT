<?php
$link=mysqli_connect("localhost","root","","smsonline");
$notif=$_GET['noti'];
$date=$_GET['date'];
$result="insert into notification1(notification,date)values('$notif','$date')";
if(mysqli_query($link,$result))
{
	echo "value inserted successfully";
	header("location:notification.php");
}
else
{
	echo "could not insert".mysqli_error($link);
}
?>