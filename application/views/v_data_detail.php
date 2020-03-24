<link rel="stylesheet" href="../assets/style.css">
<div class="content">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="body">
                    <h2 class="mt-3">Data Detail Transaksi</h2>
                    <hr>
                    <form method="get" action="<?php echo base_url('input/filter'); ?>">
                        <label>Filter Berdasarkan</label>
                        <br>
                        <select class="custom-select-sm" name="filter" id=      "filter">
                            <option value="">Pilih</option>
                            <option value="1">Per No_bukti</option>
                        </select>
                        <br />
                        <br />
                        <div id="form-no_bukti">
                            <select class="custom-select-sm" name="k_saldo">
                                <option value="">Pilih</option>
                                <?php
                                foreach($option_no_bukti as $data){ // Ambil data no_bukti dari model yang dikirim dari controller
                                    echo '<option value="'.$data->k_saldo.'">'.$data->k_saldo.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-light">Tampilkan</button>
                        <a class="btn btn-danger" href="<?php echo base_url('input/data_detail/'); ?>">Reset Filter</a>
                    </form>
                    <table class="table table-bordered" border="1" style="border-collapse:collapse; width: 100%; height: 20px;" action="">
                        <tr>
                            <th>Tanggal</th>
                            <th>No.bukti</th>
                            <th>Kegiatan</th>
                            <th>2000000</th>
                            <th>Jumlah</th>
                            <th>Saldo Kas Kecil</th>
                        </tr>
                        <br>
                        <?php $no=1; ?>
                        <?php foreach ($data_input as $di ) : ?>
                        <tr>
                            <td>
                                <?= $di->tgl ?>
                            </td>
                            <td>
                                <?= $di->no_bukti ?>
                            </td>
                            <td>
                                <?= $di->kegiatan ?>
                            </td>
                            <td></td>
                            <td>
                                <?= $di->jumlah ?>
                            </td>
                            <td>
                                <?= $di->saldo_kas_kecil ?>
                            </td>
                        </tr>
                        <?php $no++; ?>
                        <?php endforeach; ?>
                    </table>
                    <br>
                    <a class="btn btn-success float-right" href="<?php echo $url_cetak; ?>">CETAK PDF</a>
                    <br />
                    <br />
                </div>
            </div>
        </div>
    </div>
<script>
    $('#filter').change(function () { // Ketika user memilih filter}
                if ($(this).val() == '1') { // Jika filter nya 1 (per no_bukti)
                    $('#form-no_bukti').show(); // Tampilkan form tahun
                }
                $('#form-no_bukti select').val(''); // Clear data pada textbox no_bukti
            }
</script>