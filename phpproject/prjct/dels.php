<?php
$mysql=new mysqli("localhost","root","","smsonline");
$id=$_GET['id'];
mysqli_query($mysql,"delete from sreg where id={$id}");
header("Location: sview.php")
?>
<! DOCTYPE html>
<html>
<title>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <table class="w3-table-all w3-card-4">
<head>
</head>
<body>

</table>
</body>
</html>


