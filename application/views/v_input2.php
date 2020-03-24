 <link rel="stylesheet" href="assets/style.css">

<div id="content">
<div class="container">

    <h1 style="font-style: bold; font-size: 20px; text-align: center; margin-top : 30px; margin-bottom: 30px;">PT. ELECTRONIC DATA INTERCHANGE INDONESIA</h1>
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="body">
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="judul">
                            <i class="fas fa-book-open"></i> DATA TRANSAKSI
                        </div>
                        <br>

        
                        <!-- <a href="<?php echo base_url("input/det_transaksi ");?>">
                            <button type="button" class="btn btn-info">Data Detail Transaksi</button>
                        </a> -->
                        
                     
                        <br>
                        <table class="table table-bordered table-striped" id="example123" class="display">
                            <thead>
                                <tr>
                                    <!-- <th>No.</th> -->
                                    <th>KKS</th>
                                    <th>Tgl</th>
                                    <th>No.bukti</th>
                                    <th>Kegiatan</th>
                                    <th>Jumlah</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                <?php foreach ($data_input as $di ) : ?>
                                <tr>
                                    <!-- <td><?= $no ?></td> -->
                                    <td>
                                        <?= $di->k_saldo ?>
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

<!-- MODAL SALDO-->
<div class="modal fade" id="saldoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Saldo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('input/simpan_saldo')?>" method="post">
                    <input type="datetime" name="no_urut" value="<?php echo $no_urut ?>" class="form-control" hidden>
                    <br> KKS
                    <input type="text" name="k_saldo" value="<?php echo $kode ?>" class="form-control" disabled>
                    <small class="text-danger">*KKS OTOMATIS TERGENERATE*</small>
                    <br>
                    <br> Tanggal
                    <input type="text" name="tgl" class="form-control">
                    <br>
                    <!-- value="<?php  echo date("d-M-y"); ?>"  -->
                    <input type="text" name="kegiatan" value="Saldo Awal" class="form-control" hidden> Saldo Awal
                    <input type="text" name="saldo_awal" class="form-control">
                    <br>
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                    <button type="button" class="btn btn-danger" style="float: right;" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- MODAL SALDO END -->

<!-- MODAL TAMBAH -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <h5 hidden>Saldo Awal : Rp.
                    <span id="saldo_awall" style="color: red !important;" hidden></span> ,-</h5>
                <form id="form-tambah">
                    <?php if(validation_errors()) { ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php 
                        } 
                    ?>
                    <div class="form-group" hidden>
                        <label for="no_urut">Nomor Urut</label>
                        <input type="text" class="form-control" id="no_urut" aria-describedby="no_urut" placeholder="Enter no_urut">
                    </div>
                    <div class="form-group" hidden>
                        <label for="no_urut">KKS</label>
                        <input type="text" class="form-control" value="<?php echo $kode_s ?>" id="k_saldo" aria-describedby="k_Saldo" placeholder="Enter KKS"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="text" class="form-control" id="tanggal" aria-describedby="tanggal" placeholder="Enter tanggal">
                    </div>
                    <div class="form-group">
                        <label for="no_bukti">NO BUKTI</label>
                        <input type="text" class="form-control" value="" id="no_bukti" aria-describedby="no_bukti" placeholder="Enter no_bukti" disabled>
                        <small class="text-danger">*NO BUKTI OTOMATIS TERGENERATE*</small>
                    </div>
                    <div class="form-group">
                        <label for="kegiatan">KEGIATAN</label>
                        <input type="text" class="form-control" id="kegiatan" aria-describedby="kegiatan" placeholder="Enter kegiatan">
                    </div>
                    <div class="form-group">
                        <label for="saldo_awal">SALDO</label>
                        <input type="text" class="form-control" id="saldo_awal" name="saldo_kas_kecil" aria-describedby="saldo_awal" disabled>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">JUMLAH</label>
                        <input type="text" class="form-control" id="jumlah" aria-describedby="jumlah" aria-label="Amount (to the nearest dollar)" placeholder="Enter jumlah">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" id="kategori">
                            <?php
                                foreach($data_kategori as $kat)
                                {
                                    echo
                                    "<option value='".$kat->k_kategori."'> ".$kat->nama_kategori." </option>";
                                }
                            ?>
                        </select>
                    </div>


                    <table border="1" id="sementara" class="table table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th hidden>No.Urut</th>
                                <th hidden>KKS</th>
                                <th>Tgl</th>
                                <th>No.bukti</th>
                                <th>Kegiatan</th>
                                <th>Saldo</th>
                                <th>Jumlah</th>
                                <th>Kategori</th>
                                <!-- <th>Kategori</th> -->
                            </tr>
                        </thead>
                    </table>
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-primary" id="tambahrow">TAMBAH</button>
                        </div>
                        <div class="col-sm-6 text-right">
                            <button type="button" class="btn btn-danger" id="reset">RESET</button>
                        </div>
                    </div>
                </form>
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="tambah">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL UPDATE -->
<?php foreach($data_input as $di) : ?>
<div class="modal fade" id="updateModal<?=$di->id_input;?>" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="tambahModalLabel">Update Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?=base_url('input/update_data')?>" method="post">
                    <input id="id_input" name="id_input" type="hidden" value="<?= $di->id_input ?>" class="form-control">
                    KKS
                    <input id="k_saldo" type="text" value="<?= $di->k_saldo ?>" name="k_saldo" class="form-control">
                    <br>
                    Tanggal
                    <input id="tgl" type="datetime" value="<?= $di->tgl ?>" name="tgl" class="form-control">
                    <br>
                    No_bukti
                    <input id="no_bukti" type="text" value="<?= $di->no_bukti ?>" name="no_bukti" class="form-control">
                    <br>
                    Kegiatan
                    <input id="kegiatan" type="text" value="<?= $di->kegiatan ?>" name="kegiatan" class="form-control">
                    <br>
                    Jumlah
                    <input id="jumlah" type="text" value="<?= $di->jumlah ?>" name="jumlah" class="form-control">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php endforeach; ?>
</div>
    
<script>

    $(document).ready(function () {
            $('#example123').DataTable(
            );
    });

    kas_kecil = <?php echo $nilai ?>;

    // // no bukti
    nobuk = "<?= $no_bukti ?>";
    setInterval(() => {
        $("#form-tambah #no_bukti").val(nobuk);
        if (kas_kecil >= 500000) {
            kas_kecil = 0;
            nobuk = "<?= $no_bukti ?>";
        }
    }, 100);

    // tanggal
    date = null;
    setInterval(() => {
        date = (new Date())
        $('#form-tambah #tanggal').val(date.format('D[-]MMM[-]YY'));
    }, 1000);

    // tanggal
    date = null;
    setInterval(() => {
        date = (new Date())
        $('#form-saldo #tanggal').val(date.format('D[-]MMM[-]YY'));
    }, 1000);

    // SALDO AWAL
    saldo_awall = 500000;
    $("span#saldo_awall").html(saldo_awall);
    setInterval(() => {
        if ($("span#saldo_awall").html(saldo_awall) != saldo_awall) {
            $("span#saldo_awall").html(saldo_awall);
        }
        // console.log($("#form-tambah #jumlah").val());
    }, 100);

    //SALDO
    saldo = <?php echo $nilai ?>;
    $("#form-tambah #saldo_awal").val(saldo);
    setInterval(() => {
        if ($("#form-tambah #saldo_awal").val(saldo) != saldo) {
            $("#form-tambah #saldo_awal").val(saldo);
        }
        // console.log($("#form-tambah #jumlah").val());
    }, 100);

    no_urut = <?php echo $norut ?>;
    $("#form-tambah #no_urut").val(no_urut);
    setInterval(() => {
        if ($("#form-tambah #no_urut").val(no_urut) != no_urut) {
            $("#form-tambah #no_urut").val(no_urut);
        }
        // console.log($("#form-tambah #jumlah").val());
    }, 100);

    // FORM INPUTAN
    var no = 0;
    $("#tambahrow").click(function () {
        if (saldo_awall > 0) {
            if ($("#form-tambah #kegiatan").val() != "" && $("#form-tambah #jumlah").val() != "" && $(
                    "#form-tambah #no_bukti").val() != "") {
                no_urut = $("#form-tambah #no_urut").val();
                k_saldo = $("#form-tambah #k_saldo").val();
                tanggal = $("#form-tambah #tanggal").val();
                setInterval(() => {
                    no_bukti = $("#form-tambah #no_bukti").val();
                }, 100);
                kegiatan = $("#form-tambah #kegiatan").val();
                saldo_awal = $("#form-tambah #saldo_awal").val();
                kategori = $("#form-tambah #kategori").val();
                // kategori = $("#form-tambah #kategori").val();
                jumlah = $("#form-tambah #jumlah").val();
                if (jumlah > saldo) {
                    alert('saldo Anda masih kosong, mohon mengisi saldo terlebih dahulu');
                }
                if (jumlah > saldo_awall) {
                    alert('jumlah melebihi batas saldo');
                }
                if (jumlah <= saldo_awall) {
                    no++;

                    setTimeout(() => {
                        $("#form-tambah tr:last").after(
                            `
                            <tr>
                                <td>${no}</td>
                                <td hidden>${no_urut}</td>
                                <td hidden>${k_saldo}</td>
                                <td>${tanggal}</td>
                                <td>${no_bukti}</td>
                                <td>${kegiatan}</td>
                                <td>${saldo_awal}</td>
                                <td>${jumlah}</td>
                                <td>${kategori}</td>
                                
                            </tr>
                        `
                        );
                    }, 200);
                    kas_kecil += parseInt($("#form-tambah #jumlah").val());
                    setTimeout(() => {
                        $("#form-tambah #tanggal").val("");
                        $("#form-tambah #kegiatan").val("");
                        $("#form-tambah #jumlah").val("");
                    }, 100);
                    saldo_awall -= jumlah;
                    saldo -= jumlah;
                    no_urut++;
                }
            }
            if ($("#form-tambah #kegiatan").val() == "") {
                alert('field kegiatan kosong');
            }
            if ($("#form-tambah #jumlah").val() == "") {
                alert('field jumlah kosong');
            }
            if ($("#form-tambah #no_bukti").val() == "") {
                alert('field no_bukti kosong');
            }
        } else {
            alert('SALDO ANDA HABIS :(');
        }
    });

    $("#reset").click(function () {
        no = 0;
        saldo_awall = 500000;
        kas_kecil = 0;
        saldo = <?php echo $nilai ?>;
        no_urut = <?php echo $no_urut ?>;
        $("#form-tambah tr:gt(0)").remove();
    })

    $("#tambah").click(function () {
        // for loop untuk mengambil data table 1 per 1
        console.log('hhhhhaaaaalllllooooo');
        for (let index = 1; index <= $("#form-tambah tr:gt(0)").length;) {
            // lakukan perintah ajax = data request harus dalam bentuk array
            $.ajax({
                url: "<?= base_url('api/input') ?>",
                method: "POST",
                data: {
                    "no_urut": $(`#form-tambah tr:gt(${index - 1}) td:eq(1)`).text(),
                    "k_saldo": $(`#form-tambah tr:gt(${index - 1}) td:eq(2)`).text(),
                    "tgl": $(`#form-tambah tr:gt(${index - 1}) td:eq(3)`).text(),
                    "no_bukti": $(`#form-tambah tr:gt(${index - 1}) td:eq(4)`).text(),
                    "kegiatan": $(`#form-tambah tr:gt(${index - 1}) td:eq(5)`).text(),
                    "saldo_awal": $(`#form-tambah tr:gt(${index - 1}) td:eq(6)`).text(),
                    "jumlah": $(`#form-tambah tr:gt(${index - 1}) td:eq(7)`).text(),
                    "kategori": $(`#form-tambah tr:gt(${index - 1}) td:eq(8)`).text(),
                    // "kategori": $(`#form-tambah tr:gt(${index - 1}) td:eq(7)`).text(),
                },
                success: function (res) {
                    console.log(res);
                }
            });
            index++
        }

        setTimeout(() => {
            alert("berhasil tambah data");
            location.reload();
        }, 2000);
    })
</script>


