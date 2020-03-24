<link rel="stylesheet" href="assets/style.css">

<div id="content">
    <div class="container">
        <div id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

            <h1 style="font-style: bold; font-size: 20px; text-align: center; margin-top : 30px; margin-bottom: 30px;">SELAMAT DATANG</h1>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="body">
                    </div>

                    <div class="inventaris">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="icon">
                                            <i class="far fa-list-alt"></i>
                                        </span>
                                        <span class="icon-title">
                                            TRANSAKSI
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="icon">
                                            <i class="far fa-chart-bar"></i>
                                        </span>
                                        <span class="icon-title">LAPORAN</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="icon">
                                            <i class="far fa-list-alt"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="icon">
                                            <i class="far fa-list-alt"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="judul">
                                <i class="far fa-clock"></i> TRANSAKSI TERBARU
                            </div>
                            <br>

                            <table class="table table-bordered table-striped" style="width:100%" id="display">
                                <thead>
                                    <tr>
                                        <!-- <th>No.</th> -->
                                        <th hidden>id</th>
                                        <th>Tgl</th>
                                        <th>No.bukti</th>
                                        <th>Kegiatan</th>
                                        <th>Jumlah</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    <?php foreach ($data_input as $di ) : ?>
                                    <tr>
                                        <!-- <td><?= $no ?></td> -->
                                        <td hidden>
                                            <?= $di->no_urut ?>
                                        </td>
                                        <td>
                                            <?= tgl_indo($di->tgl) ?>
                                        </td>
                                        <td>
                                            <?= $di->no_bukti ?>
                                        </td>
                                        <td>
                                            <?= $di->kegiatan ?>
                                        </td>
                                        <td style="text-align: right;">
                                            <?= rupiah($di->jumlah) ?>
                                        </td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter<?= $di->id_input ?>">
                                                <button type="button" class="btn btn-outline-info">
                                                    <i class="fas fa-clipboard-list"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                            <!-- MODAL DETAIL -->
                            <?php foreach ($data_input as $di ) : ?>
                            <div class="modal fade" id="exampleModalCenter<?= $di->id_input ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Detail Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    Tanggal
                                                </div>
                                                <div class="col-sm-8">
                                                    : <?= tgl_indo($di->tgl) ?>
                                                </div>
                                                <p></p>
                                                <p></p>
                                                <div class="col-sm-4">
                                                    Nomor Bukti
                                                </div>
                                                <div class="col-sm-8">
                                                    : <?= $di->no_bukti ?>
                                                </div>
                                                <p></p>
                                                <p></p>
                                                <div class="col-sm-4">
                                                    Kegiatan
                                                </div>
                                                <div class="col-sm-8">
                                                    : <?= $di->kegiatan ?>
                                                </div>
                                                <p></p>
                                                <p></p>
                                                <div class="col-sm-4">
                                                    Jumlah
                                                </div>
                                                <div class="col-sm-8">
                                                    : Rp. <?= rupiah($di->jumlah) ?>
                                                </div>
                                                <div class="col-sm-4">
                                                    Kategori
                                                </div>
                                                <div class="col-sm-8">
                                                    : <?= $di->nama_kategori ?>
                                                </div>
                                                <p></p>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <!-- MODAL END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function () {
        $('#display').DataTable(
            {

                "aLengthMenu": [
                    [12, 27, 50, 100, -1],
                    [12, 27, 50, 100, "All"]
                                    ],
                "iDisplayLength": 12
            }
        );
    });
</script>