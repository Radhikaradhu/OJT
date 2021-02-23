<?php
$a=range('A' , 'z');
$k=0;
for($i=0;$i<4;$i++)
{
	for($j=0;$j<=i;$j++)
	{
		echo "$a($k)";
		$k=$k+1;
	}
	echo "<br>"
}
?>