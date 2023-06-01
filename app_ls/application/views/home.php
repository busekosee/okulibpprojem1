<?php include 'templates/header.php';?>
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="../../index2.html"><b>Admin</b>LTE</a>
	</div>
	<!-- /.login-logo -->
	<div class="card">
		<div class="card-body login-card-body">
			<p class="login-box-msg">Sign in to start your session</p>
            <li class="nav-item">
				<a class="nav-link" href="<?=base_url('welcome/login')?>">LOG IN</a>
			</li>
			<form action="<?=base_url('welcome/registerNow')?>" method="post" autocomplete="off">
				<div class="input-group mb-3">
					<input type="email" name="email" class="form-control" placeholder="Email">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" name="password" class="form-control" placeholder="Password">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-8">
						<div class="icheck-primary">
							<input type="checkbox" id="remember">
							<label for="remember">
								Remember Me
							</label>
						</div>
					</div>
					<!-- /.col -->
					<div class="col-4">
						<button type="submit" class="btn btn-primary btn-block">Sign In</button>
					</div>
					<?php
					if($this->session->flashdata('success')){?>
					<p class="text-success"><?=$this->session->flashdata('success')?></p>
					<?php
					}
					?>
				</div>
			</form>

	</div>
</div>
<!-- /.login-box -->

<?php include 'templates/footer.php';?>



