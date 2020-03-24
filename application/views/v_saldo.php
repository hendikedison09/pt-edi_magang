<link rel="stylesheet" href="assets/style.css">

<div id="content">
    <div class="container">
        <div id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="body">
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="judul">
                                <i class="far fa-clock"></i> TRANSAKSI TERBARU
                            </div>
                            <br>

                            <table class="table table-bordered table-striped" id="exxample">
                                <thead>
                                    <tr style="text-align: center;">
                                        <!-- <th>No.</th> -->
                                        <th rowspan="2" style="text-align: center;">NO</th>
                                        <th rowspan="2">KKS</th>
                                        <th rowspan="2">Tanggal Transaksi</th>
                                        <th rowspan="2">Jumlah Saldo</th>
                                        <th rowspan="2">AKSI</th>
                                        <th colspan="4">Laporan</th>
                                        <!-- <th>Saldo Awal</th>
                                        <th>Kas Kecil</th>
                                        <th>Jumlah</th>
                                        <th>Kategori</th> -->
                                    </tr>
                                    <tr style="text-align: center;">
                                        <td>Kas Kecil Operasional</td>
                                        <td>Pengeluaran Kas Kecil</td>
                                        <td>Kategori</td>
                                        <td>Bukti Cek</td>
                                        <td>Pengeluaran Bank</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                        <?php foreach ($ambil as $ds ) : ?>
                                        <tr>
                                            <td>
                                                <?= $no ?>
                                            </td>
                                            <td>
                                                <?= $ds->k_saldo ?>
                                            </td>
                                            <td>
                                                <?= tgl_indo($ds->tgl) ?>
                                            </td>
                                            <td>
                                                <?= rupiah($ds->saldo_awal) ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('index.php/input/hapus_saldo/'.$ds->k_saldo) ?>" class="btn btn-danger btn-alert-hapus"
                                                    onclick="return confirm('apakah anda yakin ?')"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                            <td style="text-align:center;">
                                                <a href="<?php echo base_url("input/histori/".$ds->k_saldo); ?>" class="btn btn-success"><i class="fas fa-clipboard-list"></i></a>
                                            </td>
                                            <td style="text-align:center;">
                                                <a href="<?php echo base_url('input/data_detail/'.$ds->k_saldo); ?>" class="btn btn-info"><i class="far fa-list-alt"></i></a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('input/kategori/'.$ds->k_saldo); ?>" class="btn btn-info">Kategori</a>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#bukticekModal<?= $ds->k_saldo ?>">
                                                    Bukti cek
                                                </button>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('input/laporan_kas_kecil/'.$ds->k_saldo); ?>" class="btn btn-info">KKS</a>
                                            </td>
                                            
                                        </tr>
                                        <?php $no++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                            <!-- Modal -->
                            <?php foreach ($ambil as $ds ) : ?>
                            <div class="modal fade" id="bukticekModal<?= $ds->k_saldo ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?=base_url('input/bukti_cek')?>" method="post">
                                                KKS
                                                <input type="text" name="k_saldo" value="<?= $ds->k_saldo ?>" class="form-control" >
                                                <small class="text-danger"></small>
                                                <br>
                                                <br>
                                                Tanggal
                                                <input type="date" name="tgl" value="<?= $ds->tgl?>" class="form-control">
                                                <br>
                                                <!-- value="<?php  echo date("d-M-y"); ?>"  -->
                                                Bukti Cek
                                                <input type="text" name="bukti_cek" class="form-control">
                                                <br>
                                                <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                                                <button type="button" class="btn btn-danger" style="float: right;" data-dismiss="modal">Close</button>
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
    </div>

</div>

<script>
    $(document).ready(function () {
        $('#exxample').DataTable(
        );
    });
</script>