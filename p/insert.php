<?php
$link=mysqli_connect("localhost","root","","teacherstudent");

$name=$_GET['name'];
$email=$_GET['email'];
$result="insert into tchr(id,name,no,address,email,password)values('$name','$email')";
if(mysqli_query($link,$result))
{
	echo "value inserted successfully";
}
else
{
	echo "could not insert".mysqli_error($link);
}

echo "<h2>Your Input:</h2>";

echo $name;
echo "<br>";

echo $email;
echo "<br>";
?>
