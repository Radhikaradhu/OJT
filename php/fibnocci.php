<?php
$num=0;
$n1=0;
$n2=1;
echo ",";
echo("fibnocci series upto 10 is:</br>$n1, $n2");
for($i=0;$i<=10;$i++)
{
	$n3=$n1+$n2;
	echo(",$n3");
	$n1=$n2;
	$n2=$n3;
}
?>