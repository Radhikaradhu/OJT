<?php 
$num = 153; 
$rem=0;
$sum=0;
for ($i=0;$i<=strlen($num);$i++)
	
{
$rem=$num%10;
$sum=$sum+$rem;
$num=$num/10;
}
 echo "Sum of digits 153 is $sum";  
 ?>  
