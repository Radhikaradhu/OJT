<?php
session_start();
if(isset($_SESSION['username']))
{
	$_SESSION['username']+=1;
}
else
{
	$_SESSION['username']=1;
}
$msg="you visted".$_SESSION['username']	;
	
?>
<html>
<body>
<?php
/*$_SESSION['username']='remya';
echo"session variables are set";*/
echo($msg);
?>
</body>
</html>
