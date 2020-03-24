<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
   <table  <table class="table table-bordered table-striped" style="width:100%" id="example">
                    <tr>
                        <th>NO</th>
                        <th>Tgl</th>
                        
                        <th>Penggguna</th>
                        
                        <th>Kegiatan</th>
                    </tr>
                    <?php $no=1; ?>
                    <?php foreach ($data_log as $do ) : ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $do->created_on ?></td>
                        
                        <td><?= $do->type ?></td>
                        
                        <td><?= $do->token ?></td>
                   
                        <a href="#update_input" data-toggle="modal" data-target="#updateModal" class="btn btn-default btn-form-ubah"><span class="glyphicon glyphicon-pencil"></span></a>
                            <!-- <a href="#update_input" class="btn btn-success" data-toggle="modal" data-target="#updateModal"
                                onclick="tm_detail('<?= $di->id_input ?>')">Update</a> -->
                        </td>
                        <!-- <td>
                        <a href= "<?= base_url('index.php/input/hapus_input/' . $di->id_input) ?>" data-toggle="modal" class="btn btn-danger btn-alert-hapus"  onclick="return confirm('apakah anda yakin ?')"><span class="glyphicon glyphicon-erase"></span></a>
                            <a href="<?= base_url('index.php/input/hapus_input/' . $di->id_input) ?>"
                                class="btn btn-danger" data-toggle="modal" data-toggle="modal"
                                onclick="return confirm('apakah anda yakin ?')">Hapus</a>
                        </td> -->
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                </table>
</body>
</html>