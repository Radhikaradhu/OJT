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
<form>
<fieldset style="width:300px;height:600px;margin-left:400px">
<legend style="color: black"><strong>details</strong></legend>
firstname<br>
<input type="text" name="sname"><br>
lastname<br>
<input type="text" name="lname"><br>
email<br>
<input type="email" name="email"><br>
<input type="submit" name="sub" value="submit">
</fieldset>
</form>
<?php
$link=mysqli_connect("localhost","root","","reg");
$firstname=$_GET['sname'];
$lastname=$_GET['lname'];
$email=$_GET['email'];
$result="insert into emp(sname,lname,email)values('$firstname','$lastname','$email')";
if(mysqli_query($link,$result))
{
	echo "value inserted successfully";
}
else
{
	echo "could not insert".mysqli_error($link);
}
$req=mysqli_query($link,"select * from emp");
echo "<table border='1'>
<tr>   
<th> firstname </th>
<th> lastname </th>
<th> email</th>";
while($row=mysqli_fetch_array($req))
{
	echo"<tr>
	       
	      <td>".$row['sname']."</td>
	      <td>".$row['lname']."</td>
	      <td>".$row['email']."</td>
		  <td><a href='form.php'>edit</a></td>
		  <td><a href='form.php'>delete</a></td>   
	</tr>";
}

echo"<table>";
    $firstname=$_GET['sname'];
    $lastname=$_GET['lname'];
	$email=$_GET['email'];
	
mysqli_query($mysql,"UPDATE  SET sname='$firstname',lname=$lastname',email='$email')");
mysqli_query($mysql,"delete from studentdata");
?>
</body>
</html>