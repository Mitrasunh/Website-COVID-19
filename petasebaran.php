<?php
    include "koneksi.php";
    ?>

<!doctype html>
<html lang="en">
 
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Informasi Covid-19 Kota Pematangsiantar</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/libs/css/style.css">
        <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
        <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
        <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
        <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
        <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    </head>
    
    var_dump("datavaksin");

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Corona.Pematangsiantar.go.id</a>
                <img src="assets/images/logo-pemko.png" alt="logo-pemko" width="50" height="60">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Pencarian Data..">
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Beranda <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php">Pelayanan Vaksin Covid-19 Kota Pematangsiantar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php">Kasus Covid-19 Kota Pematangsiantar</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="berita.php" ><i class="fa fa-fw fa-rocket"></i>Berita </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Kontak Penting</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link " href="callcenter.php">Call Center Dinas Kesehatan Kota Pematangsiantar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="rumahsakit.php">Rumah Sakit Rujukan Kota Pematangsiantar </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="puskesmas.php">Alamat Puskesmas Kota Pematangsiantar</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Data</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                    <li class="nav-item">
                                            <a class="nav-link" href="jumlahkasus.php">jumlah Kasus Covid-19 Kota Pematangsiantar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="datavaksin.php">Data Vaksin Covid-19 Kota Pematangsiantar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="petasebaran.php">Peta Sebaran Covid-19 Kota Pematangsiantar</a>
                                        </li>
                                    </ul>
                                </div>
                            </li><br><br>
                            <li class="nav-divider">
                                ®Web Info Covid-19 (PEMATANGSIANTAR)
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="influence-finder">
                <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Peta Sebaran Covid-19 Kota Pematangsiantar </h2>
                                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Data</a></li>
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Peta Sebaran Covid-19 Kota Pematangsiantar</a></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- contextual table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Table Peta Sebaran</h5>
                                <div class="card-body">
                                    <table class="table">
                                        <thead class="text-capitalize">				
      										<tr>  
                                                <th>Nama File</th>
                                                <th>Aksi</th>
      										</tr>
    									</thead>

                                        <tbody class="alert-success">
                                            <?php
                                                require 'config_datatabel.php';
                                                $row = $conn->query("SELECT * FROM `petasebaran`") or die(mysqli_error(''));
                                                while($fetch = $row->fetch_array()){
                                            ?>

                                            <tr>
                                                <?php 
                                                    $name = explode('/', $fetch['gambar']);
                                                ?>
                                                
                                                <td><?php echo $fetch['gambar']?></td>
                                                <td>
                                                    <a href="download_petasebaran.php?file=<?php echo $name[0]?>" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Unduh</a>
                                                </td>
                                            </tr>

                                            <?php
                                            }
                                            ?>
  						                </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2021 Dinas Komunikasi dan Informatika Kota Pematangsiantar<a href="https://diskominfo.pematangsiantar.go.id"> Diskominfo</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
    </div>
            <!-- ============================================================== -->
            <!-- end main wrapper  -->
            <!-- ============================================================== -->
            <!-- Optional JavaScript -->
            <!-- jquery 3.3.1 -->
            <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
            <!-- bootstap bundle js -->
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
            <!-- slimscroll js -->
            <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
            <!-- main js -->
            <script src="assets/libs/js/main-js.js"></script>
</body>
 
</html>