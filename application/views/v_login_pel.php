<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V15</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?=base_url()?>assets1/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets1/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets1/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets1/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets1/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets1/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets1/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets1/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets1/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets1/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(<?=base_url()?>assets1/images/bg-01.jpg);">
                    <span style="font-family: 'Kaushan Script', cursive; font-size: 35px; color:white;" class="login100-form-title-1">
                        login
                    </span>
                </div>

                <form action="#" id="sign_in" method="POST" class="login100-form validate-form">
                    <?php if ($this->session->flashdata('pesan')!=null): ?>
                    <div class="alert alert-danger">
                        <?= $this->session->flashdata('pesan');?>
                    </div>
                    <?php endif ?>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Enter username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">

                        <div>
                            <a href="" data-toggle="modal" data-target="#daftar" class="txt1">
                                Daftar disini
                            </a>
                        </div>
                        <div class="contact100-form-checkbox">
                            <a href="<?=base_url('index.php/input/login_bos')?>" class="txt1">
                                Halaman awal
                            </a>
                        </div>

                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>

                    </div>
                </form>
                <div class="modal fade" id="daftar">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 style="text-align: center;">Pendaftaran Pelanggan</h4>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>

                            </div>
                            <div class="modal-body">
                                <form id="proses_daftar" method="post" action="#">
                                    <table>
                                        Nama
                                        <input type="text" name="nama_pelanggan" class="form-control"> Telp
                                        <input type="text" name="telp" class="form-control"> Username
                                        <input type="text" name="username" class="form-control"> Password
                                        <input type="password" name="password" class="form-control">
                                    </table>
                                    <br>
                                    <div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input type="submit" name="simpan" value="DAFTAR" class="btn btn-success">
                                                </div>
                                                <div class="col-md-3"> </div>
                                                <div class="col-md-3"> </div>
                                                <div class="col-md-3">
                                                    <p id="msg"></p>
                                                    <span>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                    </span>
                                                </div>
                                            </div>


                                        </div>
                                </form>
                                </div>

                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    </div>
                </div>
            </div>

            <!--===============================================================================================-->
            <script src="<?=base_url()?>assets1/vendor/jquery/jquery-3.2.1.min.js"></script>
            <!--===============================================================================================-->
            <script src="<?=base_url()?>assets1/vendor/animsition/js/animsition.min.js"></script>
            <!--===============================================================================================-->
            <script src="<?=base_url()?>assets1/vendor/bootstrap/js/popper.js"></script>
            <script src="<?=base_url()?>assets1/vendor/bootstrap/js/bootstrap.min.js"></script>
            <!--===============================================================================================-->
            <script src="<?=base_url()?>assets1/vendor/select2/select2.min.js"></script>
            <!--===============================================================================================-->
            <script src="<?=base_url()?>assets1/vendor/daterangepicker/moment.min.js"></script>
            <script src="<?=base_url()?>assets1/vendor/daterangepicker/daterangepicker.js"></script>
            <!--===============================================================================================-->
            <script src="<?=base_url()?>assets1/vendor/countdowntime/countdowntime.js"></script>
            <!--===============================================================================================-->
            <script src="<?=base_url()?>assets1/js/main.js"></script>

</body>

</html>
<script type="text/javascript">
    $("#sign_in").submit(function (event) {
        event.preventDefault();
        var datalogin = $("#sign_in").serialize();
        $("#pesan");
        $.ajax({
            url: "<?=base_url()?>index.php/login_pelanggan/proses",
            type: "post",
            data: datalogin,
            dataType: "json",
            success: function (hasil) {
                if (hasil['status']) {
                    $("#pesan").html("Anda Sukses Login");
                    setTimeout(function () {
                        location.href = "<?=base_url()?>index.php/input2";
                    });
                } else {
                    $("#pesan").html("Username dan password tidak cocok");
                }
            }
        });
    });
    $("#proses_daftar").submit(
        function (event) {
            event.preventDefault();
            var data_input = $('#proses_daftar').serialize();
            $("#msg").html();
            $.ajax({
                url: "<?=base_url()?>login_pelanggan/simpan",
                type: "post",
                data: data_input,
                dataType: "json",
                success: function (hasil) {
                    if (hasil['status'] == 1) {
                        $("#msg").html(hasil['keterangan']);
                        $("[name=nama_pelanggan]").val('');
                        $("[name=alamat]").val('');
                        $("[name=telp]").val('');
                        $("[name=username]").val('');
                        $("[name=password]").val('');
                        setTimeout(function () {
                            $("#daftar").modal("hide");
                        }, 3000);
                    } else {
                        $("#msg").html(hasil["keterangan"]);
                    }
                }
            });
        });
</script>