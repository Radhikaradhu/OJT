
<h3> while loop </h3>
<?php
$x=1;
$l=5;
$sum=0;
while($x<=$l)
{
	$sum=$sum+$x;
	$x++;
}
echo "sum of natural numbers is $sum <br>";
?>
<?php
$x=1;
do {
	echo "the number is : $x <br>";
	$x++;
}
while($x<=5);
?>
<h3> do while loop </h3>
<?php
$x=1;
$l=5;
$sum=0;
do
{
	$sum=$sum+$x;
	$x++;
}
while($x<=$l);
echo "sum of natural numbers is $sum <br>";
?>
<h3> for loop multiplication table </h3>
<?php 
 
$a = 7;
$x = 10;
 
for($i=1; $i<=$x; $i++)
{
	$m=$a*$i;
  echo "$a*$i=$m  <br>";
}
?><h3> foreach loop </h3>
 <?php
 $colors=array("green","red","black","white");
 foreach($colors as $value){
	 echo "$value <br>	";
 }
 ?>
 <h3> string </h3>
 <?php
echo str_word_count("Hello world ");
echo strlen("hello world ");
echo strrev("hello world ");
?>
<?php
echo "<br>";
function writemessage()
{
	echo "hello";
}
writemessage();
?>



	


