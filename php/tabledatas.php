<?php
$link=mysqli_connect("localhost","root","","demo");
$sql="CREATE TABLE data(id int(5) ,firstname VARCHAR(30),lastname VARCHAR(30))";
/*$s="insert into data(firstname,lastname) values ('raju','r')";

if (mysqli_query($link,$s)) 
{
  echo "insert successfully";
} 
else 
{
  echo "could not able to connect ".mysqli_error($link);
}
  */
//$sql = "SELECT * from data where firstname='raju'";
$sql = "SELECT * FROM data  order by firstname desc";

$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result)> 0) 
{
  while($row = mysqli_fetch_assoc($result))
	  {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	
  }
} else
	{
  echo "0 results";
  echo " Success";
}



?>