<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td{
			border:1px solid;
		}
	</style>
</head>
<body>
	<form>
<table>
	<tr><td>name</td>
		<td>address</td>
		<td>district</td>
		<td>pincode</td>
		<td>phonenumber</td>
		<td>gender</td>
		<td>age</td>
		<td>subject</td>
		<td>email</td>
	</tr>
	<tbody>
	<?php
    $mysql=new mysqli("localhost","root","","techstud");
	$query=$mysql->query("select * from teacher");	
	while($row=$query->fetch_assoc())
    {    

       echo "<tr>
			     
	            
	            "<td>.$row['name'].</td>"
	            "<td>.$row['address'].</td>"
				"<td>.$row['district'].</td>"
				"<td>.$row['pincode'].</td>"
				"<td>.$row['phonenumber'].</td>"
				"<td>.$row['gender'].</td>"
				"<td>.$row['age'].</td>"
				"<td>.$row['subject'].</td>"
	            "<td>.$row['email'].</td>"
				<td><a href='edit.php'>edit</a></td>
				<td><a href='delete.php'>delete</a></td>
            </tr>" ;
	}
			?>
    </tbody>
   </table>
   </form>
   </body>
 </html>   