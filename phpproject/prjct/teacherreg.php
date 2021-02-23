<!DOCTYPE html>
<html>
<head>
<title>REGISTRATION</title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
body{
  background-image:url("img/22.jpg");
background-size:cover;
}
fieldset{
width:350px;
height: 500px;
text-align: center;
padding:20px;
margin:90px 490px;
background-color:rgba(0,0,0,0.5);
}
table,td{
color:white;
text-align:justify;
}
h1{text-align:center;
   color:black;}
</style>

</head>
<body>
<h1>Teacher Registration Form</h1>
<form action="tinsert.php" method="POST">
  <fieldset>

     <table>
<tr>
<td>FIRST NAME:</td>
<td><input type="text" name="fname" placeholder="First name" required></td>
</tr>
<tr>
<td>LAST NAME:</td>
<td><input type="text" name="lname" placeholder="last name" required></td>
</tr>
<tr>
<td>GUARDIAN NAME:</td>
<td><input type="text" name="gname" placeholder="last name" required></td>
</tr>

<tr>
<td>DOB</td>
<td><input type="date" name="dob" required></td>
</tr>
<tr>
<td>GENDER</td>
<td><input type="radio" name="gender" >Male
<input  type="radio"  name="gender" >Female</td>

</tr>
<tr>
<td>ADDRESS:</td>
<td><textarea name="address" placeholder="address" required></textarea></td>

</tr>
<tr>
<td>DISTRICT:</td>
<td><select name="district" required>
<option value="PATHANAMTHITTA">PATHANAMTHITTA</option>
<option value="KOLLAM">KOLLAM</option>
<option value="ALAPUZHA">ALAPUZHA</option>
<option value="TRIVANDRUM">TRIVANDRUM</option>
<option value="WAYANAD">WAYANAD</option>
<option value="KANNUR">KANNUR</option>
<option value="EDUKKI">EDUKKI</option></select></td>
</tr>
<tr>
<td>PINCODE:</td>
<td><input type="text" name="pincode" placeholder="pincode" required></td>

</tr>
<td>PHONE NO:</td>
<td><input type="text" name="mobile" placeholder="phone number" required></td>
</tr>
<tr>
<td>HIGHEST EDUCATION:</td>
<td><select name="qua" required>
<option value="MSC">MSC</option>
<option value="M TECH">M TECH</option>
<option value="MCA">MCA</option>
<option value="PHD">PHD</option>
<option value="MBA">MBA</option>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="email" placeholder="email" required></td>
</tr>

<tr>
<td>PASSWORD</td>
<td><input type="password" name="password" placeholder="password" required></td>
</tr>
</table>
</br>
<input type="submit" name="submit">
  </fieldset>
</form>
</body>
</html>

