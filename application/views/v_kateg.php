<h1 style="font-style: bold; font-size: 20px; text-align: center; margin-top : 30px; margin-bottom: 30px;">PT.
    ELEKTRONIK DATA INTERCHANGE INDONESIA</h1>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://momentjs.com/downloads/moment-with-locales.js"></script>
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                 <a href="#tambah" class="btn btn-primary" data-toggle="modal" style="margin-left:80px;"><span class="glyphicon glyphicon-plus"></span> Tambah</a>       
              

               <table class="table table-bordered" border="1" style="border-collapse:collapse; width: 100%; height: 20px;" action="">
                        <tr>
                            <th>konsumsi</th>
                            <th>transportasi</th>
                            <th>kehumasan</th>
                            <th>perlengkapan kantor</th>
                            <th>peralatan kantor</th>
                            <th>peralatan komputer</th>
                            <th>fotocopy & jilid</th>
                            <th>perawatan peralatan</th>
                            <th>perawatan kendaraan</th>
                            <th>entertain</th>
                            <th>pos & paket</th>
                            <th>perawatan gedung</th>
                            <th>lain-lain</th>
                            <th>perawatan komputer</th>
                            <th>project</th>
                            <th>telp & fax</th>
                            <th>pdam & listrik</th>
                        </tr>
                        
                         <?php foreach ($data_kateg as $tg ) : ?>
                            <tr>
                            <td><?= $tg->konsumsi ?></td>
                            <td><?= $tg->transportasi ?></td>
                            <td><?= $tg->kehumasan ?></td>
                            <td><?= $tg->perlengkapan_kantor ?></td>
                            <td><?= $tg->peralatan_kantor ?></td>
                            <td><?= $tg->peralatan_komputer ?></td>
                            <td><?= $tg->fotocopy_jilid ?></td>
                            <td><?= $tg->perawatan_peralatan ?></td>
                            <td><?= $tg->perawatan_kendaraan ?></td>
                            <td><?= $tg->entertain ?></td>
                            <td><?= $tg->pos_paket ?></td>
                            <td><?= $tg->perawatan_gedung ?></td>
                            <td><?= $tg->lain_lain ?></td>
                            <td><?= $tg->perawatan_komputer ?></td>
                            <td><?= $tg->project ?></td>
                            <td><?= $tg->telp_fax ?></td>
                            <td><?= $tg->pdam_listrik ?></td>
                            

                       
                    </tr>
                    <?php endforeach; ?>
                 </table>
                    <div style="margin-left: 90px;"> <?php 
                  if($this->session->flashdata('pesan')!=null){
                    echo $this->session->flashdata('pesan');
                  }
                ?></div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL SALDO -->

<<div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Tambah level</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/kateg/simpan_kateg')?>" method="post" enctype="multipart/form-data">
                   
                        <label for="konsumsi">konsumsi</label>
                        <input type="text" class="form-control" name="konsumsi">
                        <br>
                        <label for="transportasi">transportasi</label>
                        <input type="text" class="form-control" name="transportasi">
                        <br>
                        <label for="kehumasan">kehumasan</label>
                        <input type="text" class="form-control" name="kehumasan">
                        <br>
                        <label for="perlengkapan_kantor">perlengkapan_kantor</label>
                        <input type="text" class="form-control" name="perlengkapan_kantor">
                        <br>
                        <label for="peralatan_kantor">peralatan_kantor</label>
                        <input type="text" class="form-control" name="peralatan_kantor">
                        <br>
                        <label for="peralatan_komputer">peralatan_komputer</label> 
                        <input type="text" class="form-control" name="peralatan_komputer">
                        <br>
                        <label for="fotocopy_jilid">fotocopy_jilid</label> 
                        <input type="text" class="form-control" name="fotocopy_jilid">
                        <br>
                        <label for="perawatan_peralatan">perawatan_peralatan</label>
                        <input type="text" class="form-control" name="perawatan_peralatan">
                        <br>
                        <label for="perawatan_kendaraan">perawatan_kendaraan</label>
                        <input type="text" class="form-control" name="perawatan_kendaraan">
                        <br>
                        <label for="entertain">entertain</label>
                        <input type="text" class="form-control" name="entertain">
                        <br>
                        <label for="pos_paket">pos_paket</label>
                        <input type="text" class="form-control" name="pos_paket">
                        <br>
                        <label for="perawatan_gedung">perawatan_gedung</label>
                        <input type="text" class="form-control" name="perawatan_gedung">
                        <br>
                        <label for="lain-lain">lain-lain</label>
                        <input type="text" class="form-control" name="lain_lain">
                        <br>
                        <label for="perawatan_komputer">perawatan_komputer</label>
                        <input type="text" class="form-control" name="perawatan_komputer">
                        <br>
                        <label for="project">project</label>
                        <input type="text" class="form-control" name="project">
                        <br>
                        <label for="telp_fax">telp_fax</label>
                        <input type="text" class="form-control" name="telp_fax">
                        <br>
                        <label for="pdam_listrik">pdam_listrik</label>
                        <input type="text" class="form-control" name="pdam_listrik">
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


