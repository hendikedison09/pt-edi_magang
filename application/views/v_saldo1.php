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
                                                <a href="<?php echo base_url('input/laporan_kas_kecil/'.$ds->k_saldo); ?>" class="btn btn-info">KKS</a>
                                            </td>
                                            
                                        </tr>
                                        <?php $no++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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