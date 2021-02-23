<!DOCTYPE html>
<html lang="en">

<head>
    <title> Register Forms</title>
</head>

<body>
<fieldset width="50px">
   
        <legend>Student Details Form</legend>
            <form method="POST" action="insert.php">
            <input type="text" placeholder="Enter Your Name" name="name" required><br><br>
            <input type="text" placeholder="Student Roll Number" name="rno" required><br><br>
            <input type="text" placeholder="Enter Address" name="addr" required><br><br>
			<input type="email" placeholder="enter Your Email" name="mail" required><br><br>
			<button type="submit" name="submit" value="submit">Submit</button>
		</form>
        </fieldset>       
</body>

</html>
<!-- end document-->
<?php
//include('insert.php');
$link= mysqli_connect("localhost","root","","student");
if($link===false)
{
die("error:could not connect". mysqli_connect_error());
}
echo "<table border=1 >
			<centre>
			<tr>
			<th>SINO</th>
			<th>name</th>
			<th>rollno</th>
			<th>address</th>
			<th>email</th>
			<th>options</th>
			</tr>";
		
$sql="SELECT * from reg";
if ($res=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($res)>0)
	{
		
			while($row=mysqli_fetch_array($res))
			{
			  echo"<tr>
				<td>".$row['id']."</td>
				<td>".$row['name']."</td>
				<td>".$row['rno']."</td>
				<td>".$row['addr']."</td>
				<td>".$row['mail']."</td>";
				echo "<td><a href=view.php?id=".$row['id'].">View</a></td>";
				echo "<td><a href=del.php?id=".$row['id'].">Delete</a></td>";
                echo "<td><a href=edit.php?id=".$row['id'].">edit</a></td>";				
			 "</tr>";
				
			}
			echo"</table></center>";
	}
}

?>

