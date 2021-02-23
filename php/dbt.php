<?php
$link=mysqli_connect("localhost","root","","Demo");
/*$sql="CREATE TABLE workers(id(6) INT UNSIGNED AUTO_INCREMENT PRIMARY KEY ,firstname VARCHAR(30),lastname VARCHAR(30))";
$sql="insert into workers(id,firstname,lastname) values (2,'nikhi','nik')";
if (mysqli_query($link,$sql)) 
{
  echo "table created successfully";
} 
else 
{
  echo "could not able to connect $sql".mysqli_error();
}
if (mysqli_query($link, $sql)) {
  $id = mysqli_insert_id($link);
  echo " record created successfully. Last inserted ID is: " . $id;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);
*/
$sql = "SELECT distinct id, firstname, lastname FROM workers";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
?>
