<html>
<body>
<?php
$link=mysqli_connect("localhost","root","","yuva");
$id=$_GET['id'];
$result="select * from form_det where id='$id'";
$res=mysqli_query($link,$result);
while($row=$result_fetch_assoc(res))
{   
 ?>
    <form action="view.php?id=<?php echo $id; ?>" method="get">
    <table>
    <tr>
    <?php
    ?>
    <input name="id" type="id" id="id" value="<?php echo $id; ?>">
   <td>name:</td> <td><input type="text" name="name" value=<?php echo $row['name'];?>> </td>
   </tr>
   <tr>
   
   <td>email:</td> <td><input type="text" name="email" value=<?php echo $row['email'];?>> </td>

   </form>

<?php
}
?>


