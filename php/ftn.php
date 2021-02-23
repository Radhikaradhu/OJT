<?php
$a=3;
echo gettype($a);
?>
<?php
$a=0;
if(empty($a))
{
	echo "it is empty";
}
?>
<?php
$n=range(0,5);
print_r($n);
?>
<?php
$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));
?>
<?php
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_replace($a1,$a2));
?>
<?php
echo(pow(2,4));
?>
<?php
echo(rand(10,20))
?>
<?php
echo(round(27.67));
?>
<?php
echo(round(9));
?>
<?php
$date1=date_create("2013-03-15");
$date2=date_create("2013-12-12");
$diff=date_diff($date1,$date2);
?>
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"yellow");
$a2=array("e"=>"red","f"=>"green");
$result=array_diff($a1,$a2);
print_r($result);
?>
<?php
$a=array(1,2,3,4);
echo count($a);
?>

$cars=array("Volvo","BMW","Toyota");
sort($cars);
?>






