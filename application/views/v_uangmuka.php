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
				<h4 style="text-align: center; margin-top: 50px;">
					PT. EDI INDONESIA
					<br> FORMULIR PERTANGGUNGJAWABAN UANG MUKA
				</h4>
				<br>
				<br>
				<p style="text-align:right; width: 25%; border: 2px solid ; text-align: center; float:right;">Tanggal
					<?php foreach($pertanggungan_data as $f) : ?>
					<?= $f->tgl ?>
						<?php endforeach; ?>
				</p>
			</div>
			<br>
			<div>

				<div>
					<p>Jumlah uang yang diterima sebesar Rp :
						<?php foreach($pertanggungan_data as $f) : ?>
						<?= rupiah($f->jumlah) ?>
							<?php endforeach; ?>
					</p>

					<p style="font-weight: bold; border: 2px solid ; width: 1111px; ">Terbilang : <?php foreach($pertanggungan_data as $f) : ?>
						<?= to_word($f->jumlah) ?>rupiah
							<?php endforeach; ?></p>

					<p>Bukti Cek No :
						<?php foreach($pertanggungan_data as $f) : ?>
						<?= $f->bukti_cek ?>
							<?php endforeach; ?>
					</p>


					<p style="font-weight: bold;">Pengeluaran Untuk Keperluan / Kegiatan: </p>

				</div>
				<div class="row">
					<div class="col-md-10">
						<p>1.
							<?php foreach($pertanggungan_data as $f) : ?>
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
							<?php foreach($pertanggungan_data as $f) : ?> RP.
							<?= rupiah($f->jumlah) ?>
								<?php endforeach; ?>
						</p>
						<p>RP._____________________</p>
						<p>RP._____________________</p>
						<p>RP._____________________</p>
						<p>RP._____________________</p>
						<p style="border: 2px solid ;">
							<?php foreach($pertanggungan_data as $f) : ?> Rp.
							<?= rupiah($f->jumlah) ?>
								<?php endforeach; ?>
						</p>
					</div>
				</div>
				<p style="font-weight: bold;">Terbilang : </p>

			</div>




			<div>
				<p>Penyesuaian Beban Anggaran,Otorisasi No : </p>
				<div>
					<p>Kategori Biaya :</p>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div style=" width: 40px; border: 1px solid; padding: 4px; margin: 20px; height: 30px;">
							<p style="text-align: right; padding:-5px; width: 100px;">Proyek :</p>
						</div>

						<div style=" width: 40px; border: 1px solid; padding: 4px; margin: 20px; height: 30px;">
							<p style="text-align: right; padding:-5px; width: 100px;">Budget :</p>
						</div>

					</div>

					<div class="col-md-6">
						<div style=" width: 40px; border: 1px solid; padding: 4px; margin: 20px; height: 30px;">
							<p style="text-align: right; margin-left: 25px; width: 110px;">Non Proyek :</p>
						</div>
						<div style=" width: 40px; border: 1px solid; padding: 4px; margin: 20px; height: 30px;">
							<p style="text-align: right; margin-left: 25px; width: 110px; ">Non Budget :</p>
						</div>
					</div>
				</div>
				<br>
				<table border="2" style="width: 1000px; text-align: center;">
					<tr>
						<th style="margin:40px; width: 200px;" colspan="3">Menyetujui</th>
						<th style="margin:40px; width: 200px;" rowspan="2">Dir keuangan </th>
						<th style="margin:40px; width: 200px;" rowspan="2">Kadiv Keuangan </th>
						<th style="margin:40px; width: 200px;" rowspan="2">Kadiv Pendukung </th>
					</tr>
					<tr>
						<th style="margin:40px; width: 200px;">Kepala Bagian Perencanaan</th>
						<th style="margin:40px; width: 200px;">Mengetahui Kepala Devisi</th>
						<th style="margin:40px; width: 200px;">Permohonan</th>
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
				<p style="color: white;">kdkddk</p>
				<br>
				<table border="2" style="width: 250px; text-align: left; height: 150px; margin-right:700px;">
					<tr style="">
						<th style="vertical-align: top;">Jakarta,
							<br>Penerima </th>
					</tr>
				</table>
			</div>

		</div>
</body>

</html>