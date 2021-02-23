<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>
<?php  
$name=" ";
$email=" ";
?>

<form method="post" action="formss.php">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  <input type="submit" name="submit">

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;

?>

</body>
</html>