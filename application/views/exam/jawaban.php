<div class="box" style="width: 100%;">
	<div class="row center-align ">
		<div class="col s12 m6 center" style="margin: 50px 25%;">
			<div class="card-panel teal center">
				<span class="white-text">
					<h3 style="font-family: Viga; font-size: 34px;">Hasil Jawaban Ujian</h3>
					<h5><?= $sesi['full_name']; ?></h5>
					<?php

					$result = $score; ?>
					<?php if ($result <= 50) : ?>
						<center>
							<h3 style="font-family: Viga; font-size: 34px; margin-bottom: 0px;  background-color: rgb(231, 56, 56); width: 280px;">Score : <?= $score ?></h3>
							<span style="font-family: Viga; font-size: 14px; display: block; margin-bottom: 20px;">Lebih giat lagi dalam belajar!</span>
						</center>
						<a href="<?= site_url('auth_user/logout') ?>" class="btn btn-danger" style="background-color:  rgb(231, 56, 56);"> Logout</a>
					<?php elseif (($result <= 70) and ($result <= 60)) : ?>
						<center>
							<h3 style=" font-family: Viga; font-size: 34px; background-color: coral; width: 280px;">Score : <?= $score ?></h3>
							<span style="font-family: Viga; font-size: 14px; display: block; margin-bottom: 20px;">Tingkatkan lagi belajarmu!</span>
						</center>
						<a href="<?= site_url('auth_user/logout') ?>" class="btn btn-danger" style="background-color:  rgb(231, 56, 56);"> Logout</a>
					<?php else : ?>
						<center>
							<h3 style="font-family: Viga; font-size: 34px;  background-color: rgb(21, 153, 26); width: 280px;">Score : <?= $score ?></h3>
							<span style="font-family: Viga; font-size: 14px; display: block; margin-bottom: 20px;">Nilaimu sudah bagus tetapi jangan puas sampai disini. Terus belajar!</span>
						</center>
						<a href="<?= site_url('auth_user/logout') ?>" class="btn btn-danger" style="background-color:  rgb(231, 56, 56);"> Logout</a>

					<?php endif; ?>

				</span>
			</div>
		</div>
	</div>
</div>
</body>

</html>
