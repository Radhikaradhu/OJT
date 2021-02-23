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
	<form>
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
				<?php
				if($row->status==1)
				{
					?>
					<td> approved </td><td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">reject</a></td>
					<?php
				}
				elseif ($row->status==2)
				 {
					?>
					<td>rejected</td><td><a href="<?php echo base_url()?>main/approval/<?php echo $row->id;?>">approve</a></td>
					<?php
				}
				else
				{
					?>



				<td><a href="<?php echo base_url()?>main/approval/<?php echo $row->id;?>">approve</a></td>
				<td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">reject</a></td>
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
			