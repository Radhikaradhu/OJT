<html>
<body>

<a href='insert_form.php'>Insert</a>;
<?php
$mysql=new mysqli("localhost","root","","yuva");

/*$mysql->query("insert into yuva_ker(user_name,user_password,user_status) values ('yvua',123,2)");
$mysql->query("insert into yuva_ker(user_name,user_password,user_status) values ('devi',1234,2)");
$mysql->query("update yuva_ker set user_name='kripa' where user_id=4");
$name="radhu";
$mysql->query("insert into yuva_ker(user_name,user_password,user_status) values ('$name',123,2)");
$query=$mysql->query("update yuva_ker set user_name='test' where user_id=1");*/

if($query)
{
	echo"update sucessfully";
}
else
{
	echo "update failed";
}

$req=mysqli_query($mysql,"select * from yuva_ker");
echo "<table border='1'>
<tr>   
<td>Action</td>
<th> user_id </th>
<th> user_name </th>
<th>user_password</th>";
while($row=mysqli_fetch_array($req))
{
	echo"<tr>
	       <td><a href='delete.php?id={$row['user_id']}'>delete</a>
		   <a href='update.php?id={$row['user_id']}'>edit</a></td>
		  
	      <td>".$row['user_id']."</td>
	      <td>".$row['user_name']."</td>
	      <td>".$row['user_password']."</td>
          ";
	"</tr>";
}

echo"<table>";
?>
</body>
</html>