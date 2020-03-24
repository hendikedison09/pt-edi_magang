<h1 style="font-style: italic; font-size: 43px; margin-left:430px;" >input</h1>

<div class="row clearfix">
    <div class="col-md-8">
        <div class="card">
            <div class="body">
                <a href="#tambah" class="btn btn-primary" data-toggle="modal" style="margin-left:110px;"><span class="glyphicon glyphicon-plus"></span> Tambah</a>                      
                <table class="table table-hover" style="margin-left:100px;">
                    <tr>
                        <th>ID</th><th>Tgl</th><th>No.bukti</th><th>Kegiatan</th> <th>Jumlah</th> <th>Saldo Kas kecil</th> <th> AKSI</th>
                    </tr>
                   
                    <?php 
                    $no=0;
                    foreach ($data_input as $dt_inp) {
                        $no++;
                        echo '<tr>
                                <td>'.$no.'</td>
                                <td>'.$dt_inp->tgl.'</td>
                                <td>'.$dt_inp->no_bukti.'</td>
                                <td>'.$dt_inp->kegiatan.'</td>
                                 <td>'.$dt_inp->jumlah.'</td>
                                  <td>'.$dt_inp->saldo_kas_kecil.'</td>
                              
                                <td><a href="#update_input" class="btn btn-success" data-toggle="modal" onclick="tm_detail('.$dt_inp->id_input.')">Update</a> <a href="'.base_url('index.php/input/hapus_input/'.$dt_inp->id_input).'" onclick="return confirm(\'anda yakin?\')" class="btn btn-danger">Delete</a></td>
                             </tr>';
                    }
                    ?>
                 </table>

                 <div style="margin-left: 110px;"> <?php 
                  if($this->session->flashdata('pesan')!=null){
                    echo $this->session->flashdata('pesan');
                  }
                ?></div>
               
            </div>
        </div>
    </div>
</div>
 <div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Tambah input</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/input/simpan_input')?>" method="post">
          Tgl
        <input type="text" name="tgl" class="form-control"><br>
          no_bukti
        <input type="text" name="no_bukti" class="form-control"><br>
          kegiatan
        <input type="text" name="kegiatan" class="form-control"><br>
        jumlah
        <input type="text" name="jumlah" class="form-control"><br>
        saldo_kas_kecil
        <input type="text" name="saldo_kas_kecil" class="form-control"><br>
          <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="update_input">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update input</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/input/update_input')?>" method="post">
        <input type="hidden" name="id_input" id="id_input">
        tgl
        <input id="tgl" type="text" name="tgl" class="form-control"><br>
        no_bukti
        <input id="no_bukti" type="text" name="no_bukti" class="form-control"><br>
        kegiatan
        <input id="kegiatan" type="text" name="kegiatan" class="form-control"><br>
        jumlah
        <input id="jumlah" type="text" name="jumlah" class="form-control"><br>
        saldo_kas_kecil
        <input id="saldo_kas_kecil" type="text" name="saldo_kas_kecil" class="form-control"><br>
        <br>
          <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>

    function tm_detail(id_input){
        $.getJSON("<?=base_url()?>index.php/input/get_detail_input/" + id_input,function(data)
        {
            $("#id_input").val(data['id_input']);
            $("#tgl").val(data['tgl']);
            $("#no_bukti").val(data['no_bukti']);
            $("#kegiatan").val(data['kegiatan']);
            $("#jumlah").val(data['jumlah']);
            $("#saldo_kas_kecil").val(data['saldo_kas_kecil']);
        });
    }

</script>