<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard One | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script type="text/javascript" src="jquery-1.3.2.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body  style="background-color: white;">

    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area" style="box-shadow: 10px 10px 10px #eee; z-index:;background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="<?=base_url()?>assets/img/Logo_EDII.png" style="height: 50px;"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<div class="container">
    <div id="main-content">
          <?php
          $this->load->view($konten);
          ?>
      </div>
</div>
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 . All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="<?=base_url()?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?=base_url()?>assets/s/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?=base_url()?>assets/js/counterup/waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="<?=base_url()?>js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?=base_url()?>js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?=base_url()?>js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?=base_url()?>js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?=base_url()?>js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?=base_url()?>js/flot/jquery.flot.js"></script>
    <script src="<?=base_url()?>js/flot/jquery.flot.resize.js"></script>
    <script src="<?=base_url()?>js/flot/curvedLines.js"></script>
    <script src="<?=base_url()?>js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="<?=base_url()?>js/knob/jquery.knob.js"></script>
    <script src="<?=base_url()?>js/knob/jquery.appear.js"></script>
    <script src="<?=base_url()?>js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="<?=base_url()?>js/wave/waves.min.js"></script>
    <script src="<?=base_url()?>js/wave/wave-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="<?=base_url()?>js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?=base_url()?>js/plugins.js"></script>
	<!--  Chat JS
		============================================ -->
    <script src="<?=base_url()?>js/chat/moment.min.js"></script>
    <script src="<?=base_url()?>js/chat/jquery.chat.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?=base_url()?>js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="<?=base_url()?>js/tawk-chat.js"></script>
</body>

</html>