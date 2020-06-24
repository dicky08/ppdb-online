<!-- <table border="1">
		<thead>
			<form action="<?= site_url('exam/jawaban') ?>" method="POST" id="form">
				<?php $no = 1;
				foreach ($soal_ujian as $soal) : ?>
					<input type="hidden" name="jumlah" value="<?= $jumlah ?>">
					<input type="hidden" name="id[]" value="<?= $soal['id_soal'] ?>">

					<tr>
						<td><?= $no++; ?>
							<?= $soal['soal']; ?></td>
					</tr>
					<tr>
						<td> a.<input type="radio" name="pilihan[<?= $soal['id_soal'] ?>]" value="a"><?= $soal['a'] ?></td>
					</tr>
					<tr>
						<td> b.<input type="radio" name="pilihan[<?= $soal['id_soal'] ?>]" value="b"><?= $soal['b'] ?></td>
					</tr>
					<tr>
						<td> c.<input type="radio" name="pilihan[<?= $soal['id_soal'] ?>]" value="c"><?= $soal['c'] ?></td>
					</tr>
					<tr>
						<td> d.<input type="radio" name="pilihan[<?= $soal['id_soal'] ?>]" value="d"><?= $soal['d'] ?></td>
					</tr>
				<?php endforeach; ?>
				<tr>
					<td>
						<button type="submit">Simpan</button>
					</td>
				</tr>
			</form>
		</thead>
	</table> -->

<!-- NAV -->
<section id="nav">
	<div class="navbar-fixed">
		<nav class="blue darken-2" style="height: 100px;">
			<div class="container">

				<div class="nav-wrapper ">
					<a href="#" class="brand-logo logo center">Ujian Online</a>
				</div>
			</div>
			<div id="waktu" class="center" style="margin-top: 50px;"></div>
		</nav>
	</div>
</section>
<div class="container">
	<h2>Ujian Online</h2>

	<table border="1">
		<thead>

			<form action="<?= site_url('exam/jawaban') ?>" method="POST" id="form">

				<?php $no = 1;
				foreach ($soal_ujian as $soal) : ?>
					<input type="hidden" name="jumlah" value="<?= $jumlah ?>">
					<input type="hidden" name="id[]" value="<?= $soal['id_soal'] ?>">

					<tr>
						<td><?= $no++; ?>
							<?= $soal['soal']; ?></td>
					</tr>
					<tr>
						<td> a.
							<label>
								<input class="with-gap" name="pilihan[<?= $soal['id_soal'] ?>]" value="a" type="radio" />
								<span style="font-weight: bold;"><?= $soal['a'] ?></span>
							</label>

						</td>
					</tr>
					<tr>
						<td> b.
							<label>
								<input class="with-gap" name="pilihan[<?= $soal['id_soal'] ?>]" value="b" type="radio" />
								<span style="font-weight: bold;"><?= $soal['b'] ?></span>
							</label>

						</td>
					</tr>
					<tr>
						<td> c.
							<label>
								<input class="with-gap" name="pilihan[<?= $soal['id_soal'] ?>]" value="c" type="radio" />
								<span style="font-weight: bold;"><?= $soal['c'] ?></span>
							</label>

						</td>
					</tr>
					<tr>
						<td> d.
							<label>
								<input class="with-gap" name="pilihan[<?= $soal['id_soal'] ?>]" value="d" type="radio" />
								<span style="font-weight: bold;"><?= $soal['d'] ?></span>
							</label>

						</td>
					</tr>
				<?php endforeach; ?>
				<tr>
					<td>
						<button type="submit">Simpan</button>
					</td>
				</tr>
			</form>
		</thead>
	</table>
</div>
<script src="<?= base_url('assets/js/timeExam.js') ?>"></script>

</body>

</html>
