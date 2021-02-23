<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.stud
		{
	background-image:url("../img/6.jpg");
	background-size:cover;
color: white;


		}

	</style>
</head>
<body class="stud">
	<form method="post" action="<?php echo base_url()?>main/log_student">
	<fieldset>
	Email:<input type="email" name="email"><br>
	password:<input type="password" name="password"><br>
	
	<input type="submit" name="update" value="login">
	<a href="<?php echo base_url()?>main/index">logout</a>
	</fieldset>
</form>
</body>
</html>