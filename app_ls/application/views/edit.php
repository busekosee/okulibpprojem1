<?php include 'templates/header.php';?>
<body>
<div class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="#" class="navbar-brand">CRUD</a>
	</div>
</div>
<div class="container" style="padding-top: 10px;">
	<h3>Update User</h3>
	<hr>
	<form method="post" name="createUser" action="<?php echo base_url().'index.php/user/edit/'.$user['user_id'];?>">
		<div class="row">

			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" value="<?php echo set_value('email',$user['email']);?>" class="form-control">
				<?php echo form_error('email');?>
			</div>

			<div class="form-group">
				<button class="btn btn-primary">Update</button>
				<a href="" class="btn-secondary btn">Cancel</a>
			</div>
		</div>
	</form>
</div>
</body>

<?php include 'templates/footer.php';?>

