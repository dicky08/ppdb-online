<!-- NAV -->
<section id="nav">
	<div class="navbar-fixed">
		<nav class="blue darken-2">
			<div class="container">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo logo">SMAN 2 Cikampek</a>
					<a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="sass.html">Home</a></li>
						<li><a href="badges.html">Components</a></li>
						<li><a href="<?= site_url('login') ?>">Login</a></li>
						<li><a href="<?= site_url('daftar-akun') ?>">Daftar</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</section>

<!-- MOBILE NAV -->
<ul class="sidenav" id="mobile-nav">
	<li><a href="sass.html">Home</a></li>
	<li><a href="badges.html">About</a></li>
	<li><a href="<?= site_url('akun-user') ?>">Daftar</a></li>
</ul>

<section id="slider">
	<!-- SLIDER -->
	<div class="slider">
		<ul class="slides">
			<li>
				<img src="<?= base_url('assets/') ?>img/slider/school1.jpg" alt="">
				<div class="caption center-align">
					<h3 class="black-text slidsH3 ">Selamat datang di PPDB ONLINE</h3>
					<h4 class="light black-text text-lighten-3 slidsH4 ">SMA NEGERI <span class="dua">2</span>
						CIKAMPEK
					</h4>
				</div>
			</li>

			<li>
				<img src="<?= base_url('assets/') ?>img/slider/school3.jpg" alt="">
				<div class="caption left-align">
					<h3 class="light white-text capt">Selalu berusaha menjadi yang terbaik</h3>
					<h5>The Quality of Number One!!</h5>
				</div>
			</li>
		</ul>
	</div>
</section>

<!-- ALUR PENDAFTARAN -->
<section id="alur-daftar">
	<div class="container">
		<div class="row ">
			<div class="col l12 m12 s12 center-align">
				<div class="alur"><img src="<?= base_url('assets/') ?>img/alurPpdb.jpg" alt="alur" class="materialboxed " width="1000px">
				</div>
			</div>
		</div>
	</div>
</section>

<!-- PROGRAM SEKOLAH -->
<section id="program-sekolah">
	<div class="container">

		<!-- ICONS -->
		<i class="fas fa-newspaper program-icons">
			<span class="program">Program Sekolah</span>
		</i>
		<div class="row">
			<div class="col m4 s12">
				<div class="judul-program">
					<h2>Program Beasiswa</h2>
				</div>
				<div class="narasi">
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab soluta nam atque consequatur
						impedit
						non veniam, autem eveniet omnis unde.</p>
				</div>
			</div>
			<div class="col m4 s12">
				<div class="judul-program">
					<h2>Program Keahlian</h2>
				</div>
				<div class="narasi">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam provident magnam cum
						repellendus
						voluptas optio harum, quod nostrum quidem ipsam.</p>
				</div>
			</div>
			<div class="col m4 s12">
				<div class="judul-program">
					<h2>Program Kejuruan</h2>
				</div>
				<div class="narasi">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta vel quam ratione odio minima
						maiores perferendis ipsa. Facilis, maxime assumenda!</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- BERITA TERBARU -->
<section id="berita">
	<div class="container">
		<!-- ICONS -->
		<i class="fas fa-newspaper berita-icons">
			<span>Berita Terkini</span>
		</i>
		<div class="row">

			<div class="col m6 s12 l3">
				<div class="card">
					<div class="card-image responsive-img">
						<img class="materialboxed" width="350" src="<?= base_url('assets/') ?>img/news/news1.jpg" data-caption="Hai DICKY">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Kegiata Lomba Kabupaten<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
						<p>Here is some more information about this product that is only revealed once clicked on.
						</p>
					</div>
				</div>
			</div>


			<div class="col m6 s12 l3">
				<div class="card">
					<div class="card-image responsive-img">
						<img class="materialboxed" width="350" src="<?= base_url('assets/') ?>img/news/news1.jpg" data-caption="Hai DICKY">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Kegiata Lomba Kabupaten<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
						<p>Here is some more information about this product that is only revealed once clicked on.
						</p>
					</div>
				</div>
			</div>

			<div class="col m6 s12 l3">
				<div class="card">
					<div class="card-image responsive-img">
						<img class="materialboxed" width="350" src="<?= base_url('assets/') ?>img/news/news1.jpg" data-caption="Hai DICKY">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Kegiata Lomba Kabupaten<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
						<p>Here is some more information about this product that is only revealed once clicked on.
						</p>
					</div>
				</div>
			</div>

			<div class="col m6 s12 l3">
				<div class="card">
					<div class="card-image responsive-img">
						<img class="materialboxed" width="350" src="<?= base_url('assets/') ?>img/news/news1.jpg" data-caption="Hai DICKY">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Kegiata Lomba Kabupaten<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
						<p>Here is some more information about this product that is only revealed once clicked on.
						</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section id="contact-us">

	<div class="fixed-action-btn">
		<a class="btn-floating btn-large red">
			<i class="large material-icons">mode_edit</i>
		</a>
		<ul>
			<li><a class="btn-floating red"><i class="material-icons">contacts</i></a></li>
			<li><a class="btn-floating yellow darken-1"><i class="material-icons">mail</i></a></li>
			<li><a class="btn-floating green"><i class="material-icons">phone
					</i></a></li>
			<li><a class="btn-floating blue"><i class="material-icons">assessment</i></a></li>
		</ul>
	</div>
</section>
