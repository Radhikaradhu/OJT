<!DOCTYPE html>
<html>
<head>
<title>REGISTRATION</title>
<style>
fieldset{
width:350px;
height: 300px;
text-align: center;
padding:50px;
margin:90px 490px;
background-color:rgba(0,0,0,0.5); 
}
table,td{
	color:white;
	text-align:justify;
	padding: 10px;
}
h1{text-align:center;
   color:red;}
</style>

</head>
<body>
<h1>Registration</h1>
<form method="post" action="<?php echo base_url()?>Main/regaction"> 
  <fieldset>

     <table>
		<tr>
			<td>FIRST NAME:</td>
			<td><input type="text" name="fname" placeholder="First name"></td>
		</tr>
		<tr>
			<td>LAST NAME:</td>
			<td><input type="text" name="lname" placeholder="last name"></td>
		</tr>
		<tr>
			<td>USER NAME</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>PHONE NO:</td>
			<td><input type="text" name="mobile" placeholder="phone number"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" placeholder="email"></td>
		</tr>
		
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="password" placeholder="password"></td>
		</tr>
	</table>
			</br>
			<input type="submit" name="submit">
  </fieldset>
</form>
</body>
</html>
		