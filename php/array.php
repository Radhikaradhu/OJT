
<?php
$cars =["volvo", "BMW", "toyota"];
echo "i like " .$cars[0]. ", "  .$cars[1]. " and " .$cars[2]."<br>";
echo "i like $cars[0], $cars[1], $cars[2].";
?>
<?php
$a=array("name"=>"peter", "age"=>"23");
echo $a["name"].",".$a["age"];
echo "</br>";
?>
<?php
$a=[1,2,3,4,5];
foreach($a as $value)
{
	echo $value;

	
}
?>
<?php
$a=array("name"=>"peter" , "age"=>"23");

foreach($a as $value)
{
	echo "</br>";
	echo $value;
echo "</br>";
	
}
?>
<?php
$a=[1,2,3,4];
print_r($a);
echo"</br>";
?>
<?php
$a=[[1,2,3,4],[5,6,7]];
array_push($a,9);
print_r($a)
?>
<?php
$a=[1,2,3,"devu",5];
var_dump($a);
echo "</br>";
?>
<?php
$w=[1,3,5,7];
array_push($w , 2);
print_r($w)
?>
<?php
$b=array("name"=>"devu","age"=>"23");
array_push($b,'radhu');
print_r($b)
?>
<?php
$a=[2,4,6,'devu'];
unset($a[1]);
print_r($a)
?>
<?php
$b=array("name"=>"devu","age"=>"23");
unset($b["name"]);
print_r($b)
?>
<?php
$a=10;
$b=5;
$sum=$a+$b;
echo "sum",$sum,;
?>






