<html>
<head>
<title>Database</title>
<style>
table,tr,td,th
{
	border:2px solid;
	padding:10px;
	border-collapse:collapse;
	margin:20px;
	
}
</style>
</head>
<body>

<form>

<table><tr><th></th><th>name</th><th>Lastname</th><th>Email</th><th>View</th><th>Edit</th><th>Delete</th></tr>
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
	echo "<tr><td>".$row['firstname']."</td><td>".$row['Lastname']."</td><td>".$row['email']."</td><td><a href='view.php?id=".$row['slno']."'>VIEW</a></td><td><a href='editform.php?id=".$row['slno']."'>EDIT</a></td><td><a href='delete.php?id=".$row['slno']."'>DELETE</a></td></tr>";
}
echo "</table>";
 mysqli_close($link);
 ?>
 </form>
 </body>
 </html>