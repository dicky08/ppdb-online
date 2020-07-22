	<h1>
		<?= $title; ?>
	</h1>

	<div class="box-body table-responsive pl-3">
		<table border="1" cellpadding="5" width="49%">
			<thead>
				<tr class="text-center">
					<th class="text-center">No</th>
					<th class="text-center">Nik</th>
					<th class="text-center">Nama</th>
					<th class="text-center">Jenis Kelamin</th>
					<th class="text-center">Tempat/Tgl Lahir</th>
					<th class="text-center">Alamat</th>
					<th class="text-center">Photo</th>

				</tr>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($dataSiswa as $ds) : ?>
					<tr class="text-center">
						<td><?= $no++; ?></td>
						<td><?= $ds['nik_siswa']; ?></td>
						<td style="width: 100px;"><?= $ds['nama_lengkap']; ?></td>
						<td><?= $ds['jenis_kelamin']; ?></td>
						<td><?= $ds['tempat_lahir'] . ", " . date('d F Y', strtotime($ds['tanggal_lahir'])); ?></td>
						<td><?= $ds['alamat']; ?></td>
						<td><a href="<?= base_url('assets/img-pendaftaran/photo_siswa/' . $ds['photo']); ?>" target="_blank"><img src="<?= base_url('assets/img-pendaftaran/photo_siswa/' . $ds['photo']); ?>" style="width: 60px;"></a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
