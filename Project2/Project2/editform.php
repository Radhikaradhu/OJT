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

</style>
</head>
<body>
<form action="update.php" method="GET">
<fieldset style="width:300px;height:600px;margin-left:400px">
<legend style="color: red"><strong>Edit details</strong></legend>
<?php
$link=mysqli_connect("localhost","root","","studs");
$slno=$_GET['slno'];
$sql="select * from students where slno=$slno";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_assoc($result);



?>

<input type="hidden" name="id" value="<?php echo $row['slno'];?>"><br>
First name<br>
<input type="text" name="fname" value="<?php echo $row['firstname'];?>"><br>
Last name<br>
<input type="text" name="lname" value="<?php echo $row['Lastname'];?>"><br>
email<br>
<input type="email" name="email" value="<?php echo $row['email'];?>"><br>
<input type="submit" name="sub" value="submit">
</fieldset>
</form>
</body>
</html>