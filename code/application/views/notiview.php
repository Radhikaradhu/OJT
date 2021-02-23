<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td{
			border:1px solid;
		}
		.no
{

	background-image:url("../img/5.jpg");
	background-size:cover;
	color: white; 
}
	</style>
</head>
<body class="no">
	<form action="<?php echo base_url()?>main/notis" method="post">
		<table>
	<tr><td>name</td>
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
				<td><?php echo $row->name;?></td>
				<td><?php echo $row->notification;?></td>
				<td><?php echo $row->currentdate;?></td></tr>
				
				<?php
				
					?>
		
			<?php
		
		}
	}
		?>
		

</table>
<a href="<?php echo base_url()?>main/index">logout</a>
</form>
</body>
</html>
			