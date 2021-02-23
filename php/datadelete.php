<?php
$link=mysqli_connect("localhost","root","","demo");
$sql = "delete from data where id=2";

if (mysqli_query($link, $sql)) {
  echo " deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($link);
}
?>