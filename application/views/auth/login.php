<div id="login">
	<div class="row box">
		<div class="login-box-body">
			<div class="col text">
				<h3>LOGIN</h3>
				<h2>TK INSAN KAMIL</h2>
			</div>
			<form action="<?= site_url('login') ?>" method="post" enctype="multipart/form-data">
				<div class="form-group has-feedback">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
					<input type="text" id="username" placeholder="Username" name="username" class="form-control" value="<?= set_value('username') ?>">
					<?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
				</div>

				<div class=" form-group has-feedback">

					<input type="password" id="password1" placeholder="Tgl_lahir Contoh:(1996-08-02)" name="tgl_lahir" class="form-control">
					<?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
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