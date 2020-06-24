<div id="login">
	<div class="row box">
		<div class="login-box-body">
			<div class="col l6 text">
				<h3>Login</h3>
				<h2>SMAN 2 CIKAMPEK</h2>
			</div>
			<form action="<?= site_url('login') ?>" method="post" enctype="multipart/form-data">
				<div class="form-group has-feedback">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
					<input type="text" id="username" placeholder="Username" name="username" class="form-control" value="<?= set_value('username') ?>">
					<?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
				</div>

				<div class=" form-group has-feedback">
					<span class="glyphicon glyphicon-eye-open eye-open" id="eye"></span>
					<span class="glyphicon glyphicon-eye-close eye-close" id="eye"></span>

					<input type="password" id="password1" placeholder="Password" name="password1" class="form-control">
					<?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
				</div>
				<div class="form-group">
					<input type="checkbox" name="r" id="r"> Remember me
				</div>
				<div class="form-group ">
					<button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
					<a href="<?= site_url('daftar-akun') ?>" name="submit" class="btn btn-primary btn-block">Registrasi</a>
					<a href="<?= site_url('user') ?>" class="beranda btn btn-block"><u>Beranda</u></a>
				</div>
			</form>
		</div>
	</div>
</div>
