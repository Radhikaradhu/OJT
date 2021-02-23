<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table{
			border: 2px;
			padding: 2px;
			margin:10px;
		}
		.noti
{

	background-image:url("../img/1.jpg");
	background-size:cover;
	color: white; 
}
	</style>
</head>
<body class="noti">
	<form method="post" action="<?php echo base_url()?>main/noti">
	
		<fieldset style="width:150px">
			<table>
				<tr>
	<td>notification:</td>
		<td><textarea name="notification"></textarea><br></td>
</tr>
<tr>
	<td><input type="submit" name="submit"></td>
</tr>

	</table>
	
</fieldset>
</form>
<a href="<?php echo base_url()?>main/index">logout</a>
</body>
</html>