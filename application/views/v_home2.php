<link rel="stylesheet" href="assets/style.css">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
       
       
        <h4 class="modal-title" id="exampleModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
         <button type="button" class="btn btn-primary"><a href="<?php echo base_url("input/loger2"); ?>">Log</a></button>
      </div>
      <div class="modal-footer">
       
       
      </div>
    </div>
  </div>
</div>
<div id="content">
    <div class="container">
        <div id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <h1 style="font-style: bold; font-size: 20px; text-align: center; margin-top : 30px; margin-bottom: 30px;">SELAMAT DATANG</h1>
            <button style="float: center;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Log Activity
            </button>
            
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
                                            Data
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
                    <br>
                    
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 style="text-align: center;" class="modal-title" id="exampleModalLabel" ">Modal title</h5>
                                   
                                   
                                    </button>
                                </div>
                                <div class="modal-body">
                                      
                                </div>
                                <div class="modal-footer" style="float: left;">
                                   
                                  
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
                            <table class="table table-bordered table-striped" style="width:100%" id="example">
                                <thead>
                                    <tr>
                                        <!-- <th>No.</th> -->
                                        <th hidden>id</th>
                                        <th>Tgl</th>
                                        <th>No.bukti</th>
                                        <th>Kegiatan</th>
                                        <th>Jumlah</th>
                                        <th>Aksi</th>
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
                                            <?= $di->tgl ?>
                                        </td>
                                        <td>
                                            <?= $di->no_bukti ?>
                                        </td>
                                        <td>
                                            <?= $di->kegiatan ?>
                                        </td>
                                        <td>
                                            <?= $di->jumlah ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('input/detail/' . $di->id_input) ?>" data-toggle="modal" data-target="#exampleModalCenter">
                                                <button type="button" class="btn btn-outline-primary">
                                                Detail
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- MODAL DETAIL -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Detail Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p><?php $detail['tgl']; ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#myModal').modal('show');
    });

$(document).ready(function () {
$('#example').DataTable(
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