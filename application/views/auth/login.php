<div class="jumbotron jumbotron-fluid" style="background-image: url('assets/img/p.jpg');background-size: cover;height: 700px; opacity: .8;">
	<div class="container">
		<h1 class="display-3" style="font-family: Mistral; font-weight: bold; color: black; text-shadow: 1px 1px 2px white;">TK INSAN KAMIL</h1>
		<p class="lead" style="font-weight: bold; color: black;">Mari wujudkan generasi muda yang berakhlak..</p>

		<div id="login">
			<div class="row box">
				<div class="login-box-body">
					<div class="col text">
						<h3><i class="fa fa-key"></i>LOGIN</h3>
						<h2>TK INSAN KAMIL</h2>
					</div>
					<form action="<?= site_url('login') ?>" method="post" enctype="multipart/form-data">
						<div class="form-group has-feedback">
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
							<input type="text" id="username" placeholder="Username" name="username" class="form-control" value="<?= set_value('username') ?>">
							<?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
						</div>

						<div class=" form-group has-feedback">
							<span class="glyphicon glyphicon-calendar form-control-feedback"></span>
							<input type="password" id="password1" placeholder="Tgl_lahir Contoh:(1996-08-02)" name="tgl_lahir" class="form-control">
							<?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>') ?>
						</div>

						<div class="form-group ">
							<button type="submit" name="submit" class="btn btn-primary btn-block"><i class="fa fa-unlock"></i> Login</button>
							<a href="<?= site_url('daftar-akun') ?>" name="submit" class="btn btn-primary btn-block"><i class="fa fa-unlock-alt"></i> Registrasi</a>
							<a href="<?= site_url('auth_user/dashboard') ?>" class="btn btn-block btn-primary"><i class="fa fa-home"></i> Beranda</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
