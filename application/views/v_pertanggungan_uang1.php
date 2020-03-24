<div class="container">

<h1 style="font-style: bold; font-size: 20px; text-align: center; margin-top : 30px; margin-bottom: 30px;">PT. ELECTRONIC DATA INTERCHANGE INDONESIA</h1>
	<div class="card">
		<div class="card-body">
		<div class="judul">
                            <i class="fas fa-book-open"></i> DATA TRANSAKSI
                        </div>
                        <br>

			<!-- Button trigger modal -->

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form action="<?=base_url('input/savepertanggungan')?>" method="post">
											<div class="form-group">
												<label for="tgl">Tanggal</label>
												<input type="date" name="tgl" class="form-control" id="tgl" aria-describedby="tgl" placeholder="Enter tgl">
											</div>
											<div class="form-group">
												<label for="bukti_cek">Bukti Cek</label>
												<input type="text" name="bukti_cek" class="form-control" id="bukti_cek" placeholder="Enter bukti_cek">
											</div>
											<div class="form-group">
												<label for="kegiatan">Kegiatan</label>
												<input type="text" name="kegiatan" class="form-control" id="kegiatan" placeholder="Enter kegiatan">
											</div>
											<div class="form-group">
												<label for="jumlah">Jumlah</label>
												<input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Enter jumlah">
											</div>

											<input name="simpan" value="simpan" type="submit" class="btn btn-primary">
										</form>
									</div>
								</div>
							</div>
						</div>

			<table class= "table table-bordered table-striped" id="" class="display">
				<thead>
					<tr>
						<th scope="col">Tanggal</th>
						<th scope="col">Bukti Cek</th>
						<th scope="col">Kegiatan</th>
						<th scope="col">Jumlah</th>
						
						<th scope="col">Report</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($pertanggungan_input as $pu) : ?>
					<tr>
						<td>
							<?= $pu->tgl?>
						</td>
						<td>
							<?= $pu->bukti_cek?>
						</td>
						<td>
							<?= $pu->kegiatan?>
						</td>
						<td>
						<?= rupiah($pu->jumlah) ?>
						</td>
						<td><a href="<?php echo base_url("input/get_pertanggungan/".$pu->id_pertanggungan); ?>" class="btn btn-success">Laporan</a></td>
					</tr>
					<?php endforeach; ?>
					
				</tbody>
			</table>
<!-- Modal Update-->
<?php foreach($pertanggungan_input as $pu) : ?>
				<div class="modal fade" id="updateModal<?=$pu->id_pertanggungan;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="<?=base_url('input/update_pertanggungan')?>" method="post">
									<input type="hidden" name="id_pertanggungan" class="form-control" id="id_pertanggungan" value="<?= $pu->id_pertanggungan?>" aria-describedby="tgl" placeholder="Enter tgl">
									<div class="form-group">
										<label for="tgl">Tanggal</label>
										<input type="date" name="tgl" class="form-control" id="tgl" value="<?= $pu->tgl?>" aria-describedby="tgl" placeholder="Enter tgl">
									</div>
									<div class="form-group">
										<label for="bukti_">Bukti Cek</label>
										<input type="text" name="bukti_cek" class="form-control" id="bukti_cek" value="<?= $pu->bukti_cek?>" placeholder="Enter bukti_cek">
									</div>
									<div class="form-group">
										<label for="kegiatan">Kegiatan</label>
										<input type="text" name="kegiatan" class="form-control" id="kegiatan" value="<?= $pu->kegiatan ?>" placeholder="Enter kegiatan">
									</div>
									<div class="form-group">
										<label for="jumlah">Jumlah</label>
										<input type="text" name="jumlah" class="form-control" id="jumlah" value="<?= $pu->jumlah ?>" placeholder="Enter jumlah">
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
