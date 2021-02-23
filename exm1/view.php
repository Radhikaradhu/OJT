<?php
$link=mysqli_connect("localhost","root","","yuva");
    $id=$_GET['id'];
    $name=$_GET['name'];
	$email=$_GET['email'];
	
    $sq="update form_det SET name='$name',email='$email' where id='$id'";
     header("Location: views.php");
?>
