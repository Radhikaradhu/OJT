<?php
$link=mysqli_connect("localhost","root","","studs");
$slno=$_GET['slno'];
$sq="delete from students where slno='$slno'";
$result=mysqli_query($link,$sq);
if($result)
{
	echo "delete successfully";
	}
	else
	{
		echo "could not delete".mysqli_error($link);
		}
		header("Location:reg.php");
?>