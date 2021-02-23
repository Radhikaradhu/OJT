 <?php   
 /*$fact = 1;  
for ($x=1; $x<=3; $x++)   
{  
  $fact = $fact * $x; 
}  
echo "Factorial is ".$fact;
*/  
$a=range('A' , 'z');
$b=0;
for($i=0;$i<4;$i++)
{
	for($j=0;$j<=i;$j++)
	{
		echo "$a($b)";
		$b=$b+1;
	}
	echo "<br>"
}
	?>