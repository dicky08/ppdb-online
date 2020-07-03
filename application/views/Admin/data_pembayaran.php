<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?= $title; ?>
		</h1>
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="margin-bottom: 10px;">Table Pembayaran</h3>

			</div>

			<div class="box-body table-responsive pl-3">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr class="text-center">
							<th class="text-center">No</th>
							<th class="text-center">No Pembayaran</th>
							<th class="text-center">Nik</th>
							<th class="text-center">Nama Rekening</th>
							<th class="text-center">Bank</th>
							<th class="text-center">Bukti Bayar</th>
							<th class="text-center">Status</th>
							<th class="text-center">Action</th>

						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($dataBayar as $db) : ?>
							<tr class="text-center">
								<td><?= $no++; ?></td>
								<td><?= $db['no_pembayaran']; ?></td>
								<td><?= $db['nik_siswa']; ?></td>
								<td><?= $db['pemilik_rek']; ?></td>
								<td><?= $db['bank']; ?></td>
								<td><a href="<?= base_url('assets/bukti-pembayaran/' . $db['bukti_bayar']); ?>" target="_blank"><img src="<?= base_url('assets/bukti-pembayaran/' . $db['bukti_bayar']); ?>" width="80px;"></a></td>
								<td><?= $db['status']; ?></td>
								<td>

									<?php if ($db['status'] == "Belum Bayar") : ?>
										<div class="alert alert-danger">Belum bayar</div>
									<?php elseif ($db['status'] == "Sudah Bayar") : ?>
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
