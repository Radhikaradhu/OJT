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
	<form action="<?php echo base_url()?>main/notidelete" method="post">
		<table>
	<tr>
		<td>notification</td>
		<td>currentdate</td>

	</tr>
	<?php
	if($n->num_rows()>0)
	{
		foreach ($n->result() as  $row) 
		{
			?>
			<tr>
				
				<td><?php echo $row->notification;?></td>
				<td><?php echo $row->currentdate;?></td>
				<td><a href="<?php echo base_url()?>main/deletedetail/<?php echo $row->id;?>">delete</a></td>
				<?php
				
					?>
		
			<?php
		
		}
	}
		?>
		

</table>
</form>
</body>
</html>
			