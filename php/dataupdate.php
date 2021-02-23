<?php
$link=mysqli_connect("localhost","root","","demo");
$sql = "update data set lastname = 'mus' where id=2";

$result = mysqli_query($link, $sql);
if (mysqli_query($link, $sql)) 
{
  echo " updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($link);
}
?>