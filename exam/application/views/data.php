<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td{
			border:1px solid;
		}
	</style>
</head>
<body>
	<form >
<?php
if(isset($user_data))
{
	foreach ($user_data->result() as $row1)
	 {
		?>
		<table>
			<tr>
				<td>name:</td>
				<td><input type="text" name="name" value="<?php echo $row1->name;?>"></td>
			</tr>
			<tr>
				<td>address:</td>
				<td><textarea name="address"><?php echo $row1->address;?></textarea></td>
			</tr>
		<tr>
			<td>gender:</td>
			<td><input type="radio" name="gender" value="<?php echo $row1->gender;?>"></td>
		</tr>
		<tr>
				<td>age:</td>
			<td><input type="text" name="age"  value="<?php echo $row1->age;?>"></td>
		</tr>
			<tr>
			<td>email:</td>
			<td><input type="email" name="email" value="<?php echo $row1->email;?>"></td>
		</tr>
		<tr>
			<input type="hidden" name="id" value="<?php echo $row1->id;?>">
			<td><input type="submit" name="update" value="update"></td>
		</tr>
			
		</table>
		<?php
	}
}
else
{
?>	
<table>
	<tr><td>name</td>
		<td>address</td>
		<td>gender</td>
		<td>age</td>
		<td>email</td>
	</tr>
	<?php
	if($n->num_rows()>0)
	{
		foreach ($n->result() as  $row) 
		{
			?>
			<tr>
				<td><?php echo $row->name;?></td>
				<td><?php echo $row->address;?></td>
				<td><?php echo $row->gender;?></td>
				<td><?php echo $row->age;?></td>
				<td><?php echo $row->email;?></td>
				<td><a href="<?php echo base_url()?>main/update/<?php echo $row->id;?>">update</a></td>
				
			</tr>
			<?php
			
		}
	}
	else
	{
		?>
		<tr>
			<td>no data found</td>
		</tr>
		<?php
	}
}
	?>
</table>
</form>
</body>
</html>