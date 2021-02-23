<?php

$db = mysqli_connect("localhost","root","","yuva");

if($db===false)
{
    die("Connection failed: <br>" . mysqli_connect_error());
}
echo mysqli_get_host_info($db);

$sql = "CREATE TABLE mydb (
id INT(6) primary key,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";

if ($db->query($sql) === TRUE) {
  echo "Table mydb created successfully";
} else {
  echo "Error creating table: " . $db->error;
}*/
$sql = "CREATE DATABASE newone";

if ($db->query($sql) === TRUE)
{
 echo "db  created successfully<br> ";
}
else
{
 echo "Error creating table:<br> " . $db->error;
}
$sql="insert into mydb values( 109,'sunu','sukesan','sunusukesan96@gmail.com')";
if (mysqli_query($db,$sql))
{
 $last_id = mysqli_insert_id($db);
 echo " Last inserted ID is:<br> " . $last_id;
}
else
{
 echo "Error: " . $sql ."<br>". mysqli_error($db);
}
if ($db->query($sql) === TRUE)
{
 echo "  data inserted on created table  successfully <br>";
}

else
{

echo "Error creating table:<br> " . $db->error;
}


?>
