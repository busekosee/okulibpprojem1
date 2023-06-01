<?php
include 'templates/header.php';
?>

<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="../../index2.html"><b>LOG</b>IN</a>
	</div>
	<!-- /.login-logo -->
	<div class="card">
		<div class="card-body login-card-body">
			<p class="login-box-msg">LOG IN</p>

			<form action="<?= base_url('welcome/loginnow') ?>" method="post" autocomplete="off">
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
					<div class="col-4">
						<button type="submit" class="btn btn-primary btn-block">Log In</button>
					</div>
				</div>
			</form>

			<?php if ($this->session->flashdata('error')) { ?>
				<p class="text-success-dark"><?= $this->session->flashdata('error') ?></p>
			<?php } ?>
		</div>
	</div>
</div>

<?php include 'templates/footer.php'; ?>
</body>

</html>
