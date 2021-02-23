<!DOCTYPE html>
<html>
<head>
<title>
</title>
<style>
input{
	padding:20px;
	margin:10px;
}
table,tr,td,th{
	border:1px solid;
	padding:20px;
	margin-left:270px;
	margin-top:100px;
	border-collapse:collapse;
}

</style>
</head>
<body>
<form action="insert.php" method="GET">
<fieldset style="width:300px;height:500px;margin-left:400px">
<legend style="color: red"><strong>Student details</strong></legend>
First name<br>
<input type="text" name="fname"><br>
Last name<br>
<input type="text" name="lname"><br>
email<br>
<input type="email" name="email"><br>
<input type="submit" name="sub" value="submit">
</fieldset>
</form>


<table style="border:1px solid"><tr><th>SlNo</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>View</th><th>Edit</th><th>Delete</th></tr>
<?php
$link=mysqli_connect("localhost","root","","studs");
if($link===false)
{
    die("error:could not connect".mysqli_connect_error());
}
$sql="select * from students";
$result=mysqli_query($link, $sql);
while($row=mysqli_fetch_assoc($result))
{
	echo "<tr><td>".$row['slno']."</td><td>".$row['firstname']."</td><td>".$row['Lastname']."</td><td>".$row['email']."</td><td><a href='viewform.php?slno=".$row['slno']."'>VIEW</a></td><td><a href='editform.php?slno=".$row['slno']."'>EDIT</a></td><td><a href='delete.php?slno=".$row['slno']."'>DELETE</a></td></tr>";
}
echo "</table>";
 mysqli_close($link);
 ?>
</table>
 </body>
 </html>