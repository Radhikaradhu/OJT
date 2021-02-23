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
	<form method="post" action="<?php echo base_url()?>main/">
<table>
	<tr><td>firstname</td>
		<td>lastname</td>
		<td>address</td>
		<td>district</td>
		<td>pincode</td>
		<td>phonenumber</td>
		<td>dob</td>
		<td>gender</td>
		<td>highereducation</td>
		<td>email</td>
	</tr>
	<?php
	if($n->num_rows()>0)
	{
		foreach ($n->result() as  $row) 
		{
			?>
			<tr>
				<td><?php echo $row->firstname;?></td>
				<td><?php echo $row->lastname;?></td>
				<td><?php echo $row->address;?></td>
				<td><?php echo $row->district;?></td>
				<td><?php echo $row->pincode;?></td>
				<td><?php echo $row->phonenumber;?></td>
				<td><?php echo $row->dob;?></td>
				<td><?php echo $row->gender;?></td>
				<td><?php echo $row->highereducation;?></td>
				<td><?php echo $row->email;?></td>
		
			<?php
			if($row->status==1)
				{
					?>
					<td> approved </td><td><a href="<?php echo base_url()?>main/rejects/<?php echo $row->loginid;?>">reject</a></td>
					<?php
				}
				elseif ($row->status==2)
				 {
					?>
					<td>rejected</td><td><a href="<?php echo base_url()?>main/approvals/<?php echo $row->loginid;?>">approve</a></td>
					<?php
				}
				else
				{
					?>



				<td><a href="<?php echo base_url()?>main/approvals/<?php echo $row->loginid;?>">approve</a></td>
				<td><a href="<?php echo base_url()?>main/rejects/<?php echo $row->loginid;?>">reject</a></td>
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
<li><a href="<?php echo base_url()?>main/vlt">logout</a></li>
</body>
</html>
			