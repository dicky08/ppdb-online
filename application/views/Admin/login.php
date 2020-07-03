<div class="jumbotron jumbotron-fluid" style="background-image: url('assets/img/jessica-ruscello-OQSCtabGkSY-unsplash.jpg');background-size: cover;height: 720px; opacity: .8;">
	<div class="container">
		<div id="login" style="margin:100px auto">
			<div class="row box">
				<div class="login-box-body">
					<div class="col text">
						<h3><i class="fa fa-unlock-alt"></i> LOGIN ADMIN</h3>
						<h2>TK INSAN KAMIL</h2>
					</div>
					<form action="<?= site_url('admin') ?>" method="post" enctype="multipart/form-data">
						<div class="form-group has-feedback">
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
							<input type="text" id="username" placeholder="Username" name="username" class="form-control" value="<?= set_value('username') ?>">
							<?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
						</div>

						<div class=" form-group has-feedback">
							<span class="fa fa-unlock-alt form-control-feedback"></span>
							<input type="password" id="password1" name="password" placeholder="Password" name="tgl_lahir" class="form-control">
							<?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
						</div>

						<div class="form-group ">
							<button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
