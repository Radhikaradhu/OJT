<?php
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $gname=$_POST['gname'];
 $dob=$_POST['don'];
 $gender=$_POST['gender'];
 $address=$_POST['address'];
 $district=$_POST['district'];
 $pincode=$_POST['pincode'];
 $mobile=$_POST['mobile'];
 
 $id=$_POST['id'];
 $mysql=new mysqli("localhost","root","","smsonline");
 $sql=$mysql->query
 ("update sreg set fname='$fname',lname='$lname',
 gname='$gname',dob='$dob',gender='$gender',address='$address',district='$district',pincode='$pincode',mobile='$mobile' where id={$id}");
 
header("location:students.php");

?>


