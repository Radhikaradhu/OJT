<!DOCTYPE html>
<html>
<head>
	<title>new</title>
</head>
<style>
	
table,th,tr,td{
	
	padding:20px;
	margin:50px;
	
	text-align:center;
	background-color:white;
	 
	}
	h1{
		color:white;
		text-align:center; 
	}	
</style>
<body>
	<form method="post" action="">
	
	
	
		<table border="1">
		<thead>
		<tr>
		
		<th>FIRSTNAME</th>
		<th>LASTNAME</th>
		<th>USERNAME</th>
		<th>PHONENUMBER</th>
		<th>EMAIL</th>
		<th>action1</th>
		<th>action2</th>
</thead></tr>
<?php
if($n->num_rows()>0)
{
	foreach($n->result() as $row)
{
?>
<tr>
<td><?php echo $row->fname;?></td>
<td><?php echo $row->lname;?></td>
<td><?php echo $row->uname;?></td>
<td><?php echo $row->mobile;?></td>
<td><?php echo $row->email;?></td>
<?php
if($row->status==1)
{
?>
<td>Approved </td><td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">reject</a>
 </td>
<?php
}
elseif ($row->status==2) {
	?>
    <td>rejected</td><td><a href="<?php echo base_url()?>main/approval/<?php echo $row->id;?>">approve</a> 
 </td>
    <?php
}
else
{
	?>
<input type="hidden" name="id" value="<?php echo $row->id;?>">

 <td><a href="<?php echo base_url()?>main/approval/<?php echo $row->id;?>">approve</a> 
 </td>
<td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">reject</a>
 </td>
 </tr>
			<?php
		}
		}	}
	else
	{
		?>
		<tr>
			<td>no data found</td>
		</tr>
		<?php
	}

	?>
</table>
</form>
</body>
</html>
			