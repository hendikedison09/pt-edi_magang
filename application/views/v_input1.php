<link rel="stylesheet" href="assets/style.css">

<div id="content">
	<div class="container">

		<h1 style="font-style: bold; font-size: 20px; text-align: center; margin-top : 30px; margin-bottom: 30px;">PT.
			ELECTRONIC DATA INTERCHANGE INDONESIA</h1>
		<div class="card">
			<div class="card-body">
				<div class="card">
					<div class="card-body">
						<div class="judul">
							<i class="fas fa-book-open"></i> DATA TRANSAKSI
						</div>
						<br>

						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							<i class="fas fa-plus"></i>
							Tambah
						</button>
						<br>
						<br>
						<br>
						<table class="table table-bordered table-striped" id="examp">
							<thead>
								<tr>
									<th scope="col">Tanggal</th>
									<th scope="col">Bukti Cek</th>
									<th scope="col">Kegiatan</th>
									<th scope="col">Jumlah</th>
									<th colspan="2" class="text-center"> AKSI</th>
									<th scope="col">Report</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($data_input as $di) : ?>
								<tr>
									<td>
										<?= $di->tgl?>
									</td>
									<td>
										<?= $di->bukti_cek?>
									</td>
									<td>
										<?= $di->kegiatan?>
									</td>
									<td>
										<?= rupiah($di->jumlah) ?>
									</td>
									<td>
										<a href="<?= base_url('index.php/input/hapus_data/' . $di->id_pengeluaran) ?>"
											class="btn btn-danger btn-alert-hapus"
											onclick="return confirm('apakah anda yakin ?')">
											<i class="fas fa-trash-alt"></i>
										</a>
									</td>
									<td>
										<a href="" data-toggle="modal"
											data-target="#exampleModal<?=$di->id_pengeluaran;?>"
											class="btn btn-outline-success">
											<i class="fas fa-pencil-alt"></i>
										</a>
									</td>
									<td>
										<a href="<?php echo base_url("input/form1/". $di->id_pengeluaran) ?>"
											class="btn btn-success">Laporan</a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
							aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form action="<?=base_url('input/savedatabank')?>" method="post">
											<div class="form-group">
												<label for="tgl">Tanggal</label>
												<input type="date" name="tgl" class="form-control" id="tgl"
													aria-describedby="tgl" placeholder="Enter tgl">
											</div>
											<div class="form-group">
												<label for="bukti_cek">Bukti Cek</label>
												<input type="text" name="bukti_cek" class="form-control" id="bukti_cek"
													placeholder="Enter bukti_cek">
											</div>
											<div class="form-group">
												<label for="kegiatan">Kegiatan</label>
												<input type="text" name="kegiatan" class="form-control" id="kegiatan"
													placeholder="Enter kegiatan">
											</div>
											<div class="form-group">
												<label for="jumlah">Jumlah</label>
												<input type="text" name="jumlah" class="form-control" id="jumlah"
													placeholder="Enter jumlah">
											</div>
											<input name="simpan" value="simpan" type="submit" class="btn btn-primary">
										</form>
									</div>
								</div>
							</div>
						</div>

						<!-- Modal Update-->
						<?php foreach($data_input as $di) : ?>
						<div class="modal fade" id="exampleModal<?=$di->id_pengeluaran;?>" tabindex="-1" role="dialog"
							aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Update Pengeluaran</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form action="<?=base_url('input/edit_pengeluaran')?>" method="post">
											<input type="hidden" name="id_pengeluaran" class="form-control"
												id="id_pengeluaran" value="<?= $di->id_pengeluaran?>"
												aria-describedby="tgl" placeholder="Enter tgl">
											<div class="form-group">
												<label for="tgl">Tanggal</label>
												<input type="date" name="tgl" class="form-control" id="tgl"
													value="<?= $di->tgl?>" aria-describedby="tgl"
													placeholder="Enter tgl">
											</div>
											<div class="form-group">
												<label for="bukti_cek">Bukti Cek</label>
												<input type="text" name="bukti_cek" class="form-control" id="bukti_cek"
													value="<?= $di->bukti_cek?>" placeholder="Enter bukti_cek">
											</div>
											<div class="form-group">
												<label for="kegiatan">Kegiatan</label>
												<input type="text" name="kegiatan" class="form-control" id="kegiatan"
													value="<?= $di->kegiatan?>" placeholder="Enter kegiatan">
											</div>
											<div class="form-group">
												<label for="jumlah">Jumlah</label>
												<input type="text" name="jumlah" class="form-control" id="jumlah"
													value="<?= $di->jumlah?>" placeholder="Enter jumlah">
											</div>
											<input name="simpan" value="simpan" type="submit" class="btn btn-primary">
										</form>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
	</div>
</div>
<script>
    $(document).ready(function () {
        $('#examp').DataTable(
        );
    });
</script>