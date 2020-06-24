	<div id="register">
		<div class="row box ">
			<div class="login-box-body">
				<div class="col l6 text">
					<h3>Registrasi</h3>
					<h2>SMAN 2 CIKAMPEK</h2>
				</div>
				<form action="<?= site_url('user-registrasi') ?>" method="post" enctype="multipart/form-data">

					<div class="form-group has-feedback">
						<span class="glyphicon glyphicon-user form-control-feedback"></span>
						<input type="text" id="username" name="username" placeholder="Username" class="form-control" value="<?= set_value('username') ?>">
						<small class="text-danger pl-3 null"></small>
						<?= form_error('username', '<small class="text-danger pl-3 ">', '</small>') ?><br>
						<a id="cek" class="btn btn-warning btn-sm cek">Cek Username</a>
					</div>

					<div class="form-group has-feedback">
						<span class="glyphicon glyphicon-user form-control-feedback"></span>
						<input type="text" id="full_name" name="full_name" placeholder="Nama Lengkap" class="form-control" value="<?= set_value('full_name') ?>">
						<?= form_error('full_name', '<small class="text-danger pl-3">', '</small>') ?>
					</div>

					<div class="form-group has-feedback">
						<label for="password1"><em><small class="text-danger"> (Min 8 Character)</small></em></label>
						<span class="glyphicon glyphicon-eye-open eye-open" id="eye"></span>
						<span class="glyphicon glyphicon-eye-close eye-close" id="eye"></span>
						<input type="password" id="password1" name="password1" placeholder="Password" class="form-control">
						<?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
					</div>

					<div class="form-group has-feedback">
						<input type="password" id="password2" name="password2" placeholder="Ulangi Password" class="form-control">
						<?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>
					</div>

					<div class="form-group">
						<label for="picture">Ijazah Terakhir</label>
						<input type="file" id="picture" name="picture">
					</div>

					<div class="form-group">
						<button type=" submit" name="submit" class="btn btn-primary btn-block">Registrasi</button>
						<a href="<?= site_url('login') ?>" name="submit" class="btn btn-primary btn-block">Login</a>
						<a href="<?= site_url('user') ?>" class="beranda btn btn-block"><u>Beranda</u></a>
					</div>
				</form>
			</div>
		</div>
	</div>
