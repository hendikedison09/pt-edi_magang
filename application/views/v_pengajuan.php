<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	    crossorigin="anonymous">
	<title>Document</title>
	<style>
		span {
			border-bottom: 1px solid;
		}

		.kegiatan {
			border-bottom: 1px solid;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<img style="height: auto; float:center;" src="<?=base_url()?>assets/img/capture.png" alt="" class="gmbr">
			</div>

			<div class="col-md-7">
				<h4 style="text-align: center; margin-top: 50px; margin-right: 200px;">
					PT. EDI INDONESIA
					<br> pengajuan$pengajuan_dataULIR PENGAJUAN UANG MUKA
				</h4>
				<br>
				<br>
				<p style="text-align: text-align: center; right; border: 2px solid ; width: 25%; float:right;">Tanggal
					<?php foreach($pengajuan_data as $f) : ?>
					<?= $f->tgl ?>
						<?php endforeach; ?>
				</p>
			</div>
			<br>
			<br>
			<div>

				<div>
					<p>Jumlah uang yang diterima sebesar Rp :
						<?php foreach($pengajuan_data as $f) : ?>
						<?= rupiah($f->jumlah) ?>
							<?php endforeach; ?>
					</p>

					<p style="font-weight: bold; border: 2px solid ;">Terbilang : <?php foreach($pengajuan_data as $f) : ?>
						<?= to_word($f->jumlah) ?>rupiah
							<?php endforeach; ?></p>

					<p>Bukti Cek No :
						<?php foreach($pengajuan_data as $f) : ?>
						<?= $f->bukti?>
							<?php endforeach; ?>
					</p>
					</p>

					<p style="font-weight: bold;">Pengeluaran Untuk Keperluan / Kegiatan: </p>

				</div>
			<div class="row">
			<div class="col-md-10">
					<p>1.
						<?php foreach($pengajuan_data as $f) : ?>
						<?= $f->kegiatan?>
							<?php endforeach; ?>
					</p>
					<p>2. ______________________________________________________________________________________________________________ </p>
					<p>3. ______________________________________________________________________________________________________________ </p>
					<p>4. ______________________________________________________________________________________________________________ </p>
					<p>5. ______________________________________________________________________________________________________________ </p>
					<p style="text-align: right; word-spacing:5px; ">Jumlah</p>
				</div>

				<div class="col-md-2" style="text-align: right; margin: top; ">
					<p>
						<?php foreach($pengajuan_data as $f) : ?> RP.
						<?= rupiah($f->jumlah) ?>
							<?php endforeach; ?>
					</p>
					<p>RP._____________________</p>
					<p>RP._____________________</p>
					<p>RP._____________________</p>
					<p>RP._____________________</p>
					<p style="border: 2px solid ;">
						<?php foreach($pengajuan_data as $f) : ?> Rp.
						<?= rupiah($f->jumlah) ?>
							<?php endforeach; ?>
					</p>
				</div>
			</div>

				<table border="2" style="width: 1000px; text-align: center;">
					<tr>
						<th style="margin:40px; width: 110px;" rowspan="2">Permohonan</th>
						<th style="margin:40px; width: 110px;" rowspan="2">Mengetahui Kepala Devisi</th>
						<th style="margin:40px; width: 110px;" rowspan="2">Kepala Bagian Perencanaan</th>
						<th style="margin:40px; width: 100px;" colspan="4">Menyetujui</th>

					</tr>
					<tr>
						<th style="margin:40px; width: 110px;">Kadiv Keuangan </th>
						<th style="margin:40px; width: 110px;">Kadiv Pendukung</th>
						<th style="margin:40px; width: 110px;">Dir keuangan</th>
					</tr>
					<tr>
						<td style="padding: 60px;"></td>
						<td style="padding: 60px;"></td>
						<td style="padding: 60px;"></td>
						<td style="padding: 60px;"></td>
						<td style="padding: 60px;"></td>
						<td style="padding: 60px;"></td>
					</tr>
				</table>
				<br>
				<p>Kas Bon / Uang Muka akan diselesaikan paling lambat tgl : ________________________</p>
				<table border="2" style="width: 230px; text-align: left; height: 150px; margin-left:700px; ">
					<tr style="">
						<th style="vertical-align: top;">Jakarta,
							<br>Penerima Uang/Cek</th>
					</tr>
				</table>




			</div>
</body>

</html>