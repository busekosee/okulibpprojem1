<?php include 'templates/header.php';?>
<body>
<div class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="#" class="navbar-brand">CRUD</a>
	</div>
</div>
<div class="container" style="padding-top: 10px;">
	<h3>Create User</h3>
	<hr>
	<form method="post" name="createUser" action="<?php echo base_url().'index.php/user/create';?>">
		<div class="row">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" value="<?php echo set_value('name');?>" class="form-control">
				<?php echo form_error('name');?>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" value="<?php echo set_value('email');?>" class="form-control">
				<?php echo form_error('email');?>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="text" name="password" value="<?php echo set_value('password');?>" class="form-control">
				<?php echo form_error('password');?>
			</div>
			<div class="form-group">
				<button href="anasayfakopya.php" class="btn btn-primary">Create</button>
				<a href="" class="btn-secondary btn">Cancel</a>
			</div>
		</div>
	</form>
</div>
</body>

<?php include 'templates/footer.php';?>
