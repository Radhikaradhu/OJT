<?php
$mysql=new mysqli("localhost","root","","yuva");
$id=$_GET['id'];
$result=$mysql->query("select * from yuva_ker where user_id='$id'");
?>
<html>
<body>
<form method="GET" action="update.php">
<input type="text"  placeholder="name" name="name"></br>
	<input type="password"  placeholder="password" name="password"></br>
	<input type="submit" value="go" placeholder="GO">
</form>
</body>
