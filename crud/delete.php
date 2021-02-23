<?php
$mysql=new mysqli("localhost","root","","yuva");
//$id =$_GET['id'];
$id=$_GET['id'];
$result=$mysql->query("delete from yuva_ker where user_id='$id'");

//insertion

?>
