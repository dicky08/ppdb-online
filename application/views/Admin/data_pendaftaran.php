<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?= $title; ?>
		</h1>
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="margin-bottom: 10px;">Table Siswa</h3>
				<a href="<?= site_url('cetakPendaftaran') ?>" target="_blank" class="btn btn-primary"><i class="fa fa-print"> Cetak</i></a>

			</div>

			<div class="box-body table-responsive pl-3">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr class="text-center">
							<th class="text-center">No</th>
							<th class="text-center">Nik</th>
							<th class="text-center">Nama</th>
							<th class="text-center">Jenis Kelamin</th>
							<th class="text-center">Tempat/Tgl Lahir</th>
							<th class="text-center">Agama</th>
							<th class="text-center">Alamat</th>
							<th class="text-center">Photo</th>
							<th class="text-center">Status</th>
							<th class="text-center">Action</th>

						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($dataSiswa as $ds) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td><?= $ds['nik_siswa']; ?></td>
								<td><?= $ds['nama_lengkap']; ?></td>
								<td><?= $ds['jenis_kelamin']; ?></td>
								<td><?= $ds['tempat_lahir'] . ", " . date('d F Y', strtotime($ds['tanggal_lahir'])); ?></td>
								<td><?= $ds['agama']; ?></td>
								<td><?= $ds['alamat']; ?></td>
								<td><a href="<?= base_url('assets/img-pendaftaran/photo_siswa/' . $ds['photo']); ?>" target="_blank"><img src="<?= base_url('assets/img-pendaftaran/photo_siswa/' . $ds['photo']); ?>" width="80px;"></a></td>
								<td><?= $ds['status']; ?></td>
								<td>

									<?php if ($ds['status'] == "Belum Bayar") : ?>
										<div class="alert alert-danger">Belum bayar</div>
									<?php elseif ($ds['status'] == "Sudah Bayar") : ?>
										<a href="" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> Konfirmasi</a>
									<?php else : ?>
										<div class="label-success">Aktif</div>
									<?php endif; ?>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>

	</section>
</div>
