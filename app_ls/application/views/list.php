<?php include 'templates/header.php';?>
<body>
<div class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="#" class="navbar-brand">CRUD</a>
	</div>
</div>
<div class="container" style="padding-top: 10px;">
	<div class="row">
		<div class="col-6"><h3>view User</h3></div>
		<div class="row">
			<div class="col-6 text-right">
				<a href="<?php echo base_url().'index.php/Messages/index';?>" class="btn btn-primary">mesaj</a>
			</div>
			<div class="col-6 text-right">
				<a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-primary">Create</a>
			</div>
		</div>
		<hr>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-12">
		<table class="table table-striped">
			<tr>
				<th>ID</th>
				<th>email</th>

				<th>name</th>
				<th>password</th>
				<th>edit</th>
				<th>delete</th>
			</tr>
			<?php if (!empty($users)){ foreach ($users as $user){?>

				<tr>
					<td><?php echo $user['user_id']?></td>
					<td><?php echo $user['email']?></td>

					<td><?php echo $user['name']?></td>
					<td><?php echo $user['password']?></td>
					<td>
						<a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']?>" class="btn btn-primary">Edit</a>
					</td>
					<td>
						<a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>" class="btn btn-danger">Delete</a>
					</td>

				</tr>

			<?php }}else{?>
				<tr>
					<td colspan="5">records not found</td>
				</tr>
			<?php }?>
		</table>
	</div>
</div>
</div>
</body>
<?php include 'templates/footer.php';?>
