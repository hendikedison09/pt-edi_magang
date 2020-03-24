<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/datatables.bootstrap4.min.css">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/25106969d6.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/style.css">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">  

    <!-- DATATABLES -->
    <!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script> -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <!-- WRAPPER START -->
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                    <img src="<?=base_url()?>assets/img/Logo_EDII.png" style="height: 50px;" />
            </div>

            <ul class="list-unstyled components">
                <p>Administrasi Kantor</p>
                
                 <?php 
                        if($this->session->userdata('id_level')=='1'){
                        ?>
                <li class="active">
                    <a href="<?=base_url('input')?>">
                        <span style="margin-right: 4px;"><i class="fas fa-home"></i></span> Home
                    </a>
                </li>
                  <li>
                    <a href="<?=base_url('input/data')?>">
                        <span style="margin-right: 1px;"><i class="fas fa-money-bill"></i></span> Transaksi
                    </a>
                </li>
                <li>
                    <a href="<?=base_url('input/det_transaksi')?>">
                        <span style="margin-right: 8px;"><i class="fas fa-book"></i></span> Laporan
                    </a>
                </li>
                
                <li>
                    <a href="<?=base_url('input/log')?>">
                        <span style="margin-right: 6px;"><i class="fas fa-key"></i></span> Log Activity
                    </a>
                </li>

                    
    <?php 
                     }
                     else if ($this->session->userdata('id_level')=='2'){
                        ?>
                <li class="active">
                    <a href="<?=base_url('input/home2')?>">
                        <span style="margin-right: 4px;"><i class="fas fa-home"></i></span> Home
                    </a>
                </li>
              
                <li>
                    <a href="<?=base_url('input/det_transaksi1')?>">
                        <span style="margin-right: 8px;"><i class="fas fa-book"></i></span> Laporan
                    </a>
                </li>
                <li>
                    <a href="<?=base_url('input/log_user')?>">
                        <span style="margin-right: 6px;"><i class="fas fa-key"></i></span> Log Activity
                    </a>
                </li>
                 <li>
                    <a href="<?=base_url('input/log')?>">
                        <span style="margin-right: 6px;"><i class="fas fa-key"></i></span> Tabel log 
                    </a>
                </li>

                 
                       <?php
        }
        ?>
            </ul>
        </nav>

        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                <div class="container-fluid">

                    <!-- <button type="button" id="sidebarCollapse" class="btn btn-info"> -->
                        <i class="fas fa-align-left fa-lg" id="sidebarCollapse"></i>
                        <!-- <span>Toggle Sidebar</span> -->
                    <!-- </button> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user-circle fa-lg"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a href=""  class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-user-circle fa-lg"></i> Hendik
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href=""><i class="far fa-user" style="margin-right: 10px;"></i>My Profile</a>
                                <a class="dropdown-item" href="<?php echo base_url('Login_admin/logout')?>"> <i class="fas fa-lock" style="margin-right: 10px;"></i>Logout</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                    </ul>
                    <!-- <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form> -->
                </div>
            </nav>
            
            <script>
                $(document).ready(function () {

                    $('#sidebarCollapse').on('click', function () {
                        $('#sidebar').toggleClass('active');
                    });

                });
            </script>