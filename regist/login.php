<?php
$link=mysqli_connect("localhost","root","","reg");
$name=$_GET['name'];
$password=$_GET['pass'];
$count=0;
$sq="select empname,emppassword from employees";
$result=mysqli_query($link,$sq);
while($row=mysqli_fetch_assoc($result))
{
if($name==$row['empname'])
{
	if($password==$row['emppassword'])
	{
		echo "login successful";
		$count=$count+1;
	}

}
}
if($count==0)
{
	echo "invalid login";
}

?>
	
