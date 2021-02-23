<?php
$mysql=new mysqli("localhost","root","","studentsdb");
$id=$_GET['id'];
mysqli_query($mysql,"delete from studentdata where id={$id}");
header("location:view.php");



?>
