<?php
$nameErr = $numErr = $addressErr = $emailErr = $passwordErr = "";  
	$name = $email = $age= $address = $password = "";  
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	
	{
		if(empty($_POST['name']))
		{
			$nameErr= "name is required";
	
		}
		else
		{
			$name=$_POST['name'];
			if(!preg_match("/^[a-zA-Z ]*$/",$name))
			{
			
				$nameErr=" only letters and spaces allowed<br>";
			
			}
			
		}
		if(empty($_POST['email']))
		{
			$emailErr="email is required";
			
		}
		else
		{	$email=$_POST['email'];
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				$emailErr="invalid email";
			
			}
			
		}
		if(empty($_POST['num']))
		{
			$noErr="age is required";
			
		}
		else
		{
			$age = $_POST ["num"];  
			if (!preg_match ("/^[0-9]*$/", $no) )
			{  
		    	$noErr = "Only numeric value is allowed.";  
		    	 
			}	 
	
		}
		if(empty($_POST['address']))
		{
			$addressErr= "name is required";
	
		}
		else
		{
			$uname=$_POST['address'];
			if(!preg_match("/^[a-zA-Z ]*$/",$address))
			{
			
				$addressErr=" only letters and spaces allowed<br>";
			
			}
			
		}
		//Validates password & confirm passwords.
    if(empty($_POST['pass'])) 
    	{
    		$passwordErr= "password is required";
	
		}
		else
		{
			$password=$_POST['pass'];
		    
		    if (strlen($_POST["pass"]) <= '8')
		     {
		        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
		    }
		    elseif(!preg_match("#[0-9]+#",$password))
		     {
		        $passwordErr = "Your Password Must Contain At Least 1 Number!";
		    }
		    elseif(!preg_match("#[A-Z]+#",$password))
		     {
		        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
		    }
		    elseif(!preg_match("#[a-z]+#",$password)) 
		    {
		        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
		    }
		}




        $link=mysqli_connect("localhost","root","","reg");
	
         if($nameErr=="" && $emailErr=="" && $noErr=="" && $addressErr=="" && $passwordErr=="")
		 {	
		 	$name=$_POST['name'];
		 	$age = $_POST ["num"]; 
		 	$email=$_POST['email'];
		 	$uname=$_POST['address']; 
		 	$password=$_POST['pass'];

		 	$qry="insert into register(name,age,email,uname,password) values('$name','$age','$email','$address','$password')";
		 	mysqli_query($link,$qry);
	 }
	}

?>
<html>
<head>
<title>
</title>
<style>
input{
	padding:20px;
	margin:10px;
}
.error {color: #FF0000;}

</style>
</head>
<body>

<form action="insert.php" method="GET">
<fieldset style="width:300px;height:600px;margin-left:400px">
<legend style="color: black"><strong>teacher</strong></legend>
empid<br>
<input type="text" name="id" ><br>
empname<br>
<input type="text" name="name" value="<?php echo $name;?>"<span class="error">* <?php echo $nameErr; ?> </span></br><br>
empno<br>
<input type="text" name="num"<?php echo $num;?>"><span class="error">* <?php echo $numErr; ?> </span></br><br>
empaddress<br>
<textarea name="address"></textarea><br>
empemail<br>
<input type="email" name="email"value="<?php echo $email;?>"><span class="error">* <?php echo $emailErr; ?> </span></br><br>
emppassword<br>
<input type="password" name="pass"value="<?php echo $password;?>"><span class="error">* <?php echo $passwordErr; ?><br>
<input type="submit" name="sub" value="submit">
</span></br>
</fieldset>
</form>
</body>
</html>