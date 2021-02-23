<!DOCTYPE html>
<html>
	<head>
	<style>
	table,th,tr,td{
		border:2px solid;
		border-collapse:collapse;
		margin:10px;
	}
	</style>
	</head>
<body>
 <table>
    <thead> 
	 <tr>
        
		
		<th>Student Rollno</th>
		<th>Student Name</th>
		<th>Student Address</th>
		<th>Student email</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	</thead>
	<tbody>
	<?php
    $mysql=new mysqli("localhost","root","","studentsdb");
	$query=$mysql->query("select * from studentdata");	
	while($row=$query->fetch_assoc())
    {    

       echo "<tr>
			     
	            <td>".$row['rollno']."</td>
	            <td>".$row['student_name']."</td>
	            <td>".$row['student_address']."</td>
	            <td>".$row['student_email']."</td>
				<td><a href='edit_form.php'>edit</a></td>
				<td><a href='delete.php'>delete</a></td>
            </tr>" ;
	}
    ?>
    </tbody>
   </table>
   </form>
   </body>
 </html>   