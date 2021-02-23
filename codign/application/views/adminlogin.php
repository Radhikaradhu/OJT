</html>
<!DOCTYPE html>
<html>
<head><h1>ADMIN LOGIN</h1>
</head>
<style>
	form{
		width:100px;
		height:150px;
		padding:10px;
		margin:10px;

		
	}
	h1
	{
		text-align: center;
		color: red;
	}
	.l1{
	background-image:url("../img/1.jpg");
	background-size:cover;


}
fieldset
{
	background-color: ff000ff;
	margin-left:550px;
	color: yellow;
	
}


</style>
<body class="l1">
	
	<form method="post" action="<?php echo base_url()?>Main/log">
		<fieldset>
			Email id:<input type="email"name="email"placeholder="Enter your email"><br>
			Password:<input type="password"name="password"placeholder="Enter your password"><br>
			<input type="submit" value="LOGIN">
		</fieldset>
	</form>

</body>
</html>