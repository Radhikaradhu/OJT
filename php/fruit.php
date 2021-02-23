<?php
$fruit=array("apple","orange","grapes");
sort($fruit);
$len=count($fruit);
for($i=0;$i<=$len;$i++)
{
	echo $fruit[$i];
echo "<br>";
}
?>
