<?php 
  			include "koneksi.php";
            include "alert.php";
?>

<!doctype html>
<html lang="en">
 
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166372113-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-166372113-1');
    </script>
    <style>
        .centero {
        display: block;
        margin-left: auto;
        margin-right: auto;
            }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <title>Informasi Covid-19 Kota Pematangsiantar</title>
</head>

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
                <a class="navbar-brand" href="index.php">Corona.Pematangsiantar.go.id</a>
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
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Beranda <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#vaksin">Pelayanan Vaksin Covid-19 Kota Pematangsiantar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#kasus">Kasus Covid-19 Kota Pematangsiantar</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="berita.php" ><i class="fa fa-fw fa-rocket"></i>Berita </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Kontak Penting</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="callcenter.php">Call Center Dinas Kesehatan Kota Pematangsiantar</a>
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
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Data</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                    <li class="nav-item">
                                            <a class="nav-link" href="jumlahkasus.php">Jumlah Kasus Covid-19 Kota Pematangsiantar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="datavaksin.php">Data Vaksin Covid-19 Kota Pematangsiantar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="petasebaran.php">Peta Sebaran Covid-19 Kota Pematangsiantar</a>
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
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Info Covid-19 Kota Pematangsiantar </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Beranda</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Pelayanan Vaksin Covid-19 Kota Pematangsiantar</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Selamat Datang Di Web Resmi Info Kasus Covid-19 Kota Pematangsiantar</h5>
                                    <div class="card-body">
                                        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                                                <li data-target="#carouselExampleIndicators1" data-slide-to="3"></li>
                                                <li data-target="#carouselExampleIndicators1" data-slide-to="4"></li>
                                                <li data-target="#carouselExampleIndicators1" data-slide-to="5"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="assets/images/merdeka.jpg" alt="First slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">Terapkan Protokol Kesehatan 5 M</h3>
                                                        <p>Gerakan 5M Covid-19
                                                            Makna gerakan 5M protokol kesehatan adalah sebagai pelengkap aksi 3M yaitu:
                                                            
                                                            1. Memakai masker
                                                            
                                                            2. Mencuci tangan pakai sabun dan air mengalir
                                                            
                                                            3. Menjaga jarak
                                                            
                                                            4. Menjauhi kerumunan
                                                            
                                                            5. Membatasi mobilisasi dan interaksi
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="assets/images/banner1.jpeg" alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">Terapkan Protokol Kesehatan 5 M</h3>
                                                        <p>Gerakan 5M Covid-19
                                                            Makna gerakan 5M protokol kesehatan adalah sebagai pelengkap aksi 3M yaitu:
                                                            
                                                            1. Memakai masker
                                                            
                                                            2. Mencuci tangan pakai sabun dan air mengalir
                                                            
                                                            3. Menjaga jarak
                                                            
                                                            4. Menjauhi kerumunan
                                                            
                                                            5. Membatasi mobilisasi dan interaksi
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="assets/images/banner2.jpeg" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">Terapkan Protokol Kesehatan 5 M</h3>
                                                        <p>Gerakan 5M Covid-19
                                                            Makna gerakan 5M protokol kesehatan adalah sebagai pelengkap aksi 3M yaitu:
                                                            
                                                            1. Memakai masker
                                                            
                                                            2. Mencuci tangan pakai sabun dan air mengalir
                                                            
                                                            3. Menjaga jarak
                                                            
                                                            4. Menjauhi kerumunan
                                                            
                                                            5. Membatasi mobilisasi dan interaksi
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="assets/images/banner3.png" alt="Fourth slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">Terapkan Protokol Kesehatan 5 M</h3>
                                                        <p>Gerakan 5M Covid-19
                                                            Makna gerakan 5M protokol kesehatan adalah sebagai pelengkap aksi 3M yaitu:
                                                            
                                                            1. Memakai masker
                                                            
                                                            2. Mencuci tangan pakai sabun dan air mengalir
                                                            
                                                            3. Menjaga jarak
                                                            
                                                            4. Menjauhi kerumunan
                                                            
                                                            5. Membatasi mobilisasi dan interaksi
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="assets/images/banner4.jpg" alt="Fourth slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">Terapkan Protokol Kesehatan 5 M</h3>
                                                        <p>Gerakan 5M Covid-19
                                                            Makna gerakan 5M protokol kesehatan adalah sebagai pelengkap aksi 3M yaitu:
                                                            
                                                            1. Memakai masker
                                                            
                                                            2. Mencuci tangan pakai sabun dan air mengalir
                                                            
                                                            3. Menjaga jarak
                                                            
                                                            4. Menjauhi kerumunan
                                                            
                                                            5. Membatasi mobilisasi dan interaksi
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                               <span class="sr-only">Previous</span>  </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>  </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h2 class="card-header" id="vaksin">Pelayanan Vaksinasi Covid-19 Kota Pematangsiantar</h2>
                                    <div class="card-body p-0">
                           <?php
 							include 'database_gambar.php';
                            $sql="select * from gambar order by id_gambar desc limit 1";
                            $hasil=mysqli_query($kon,$sql);
                            $no=0;
                            //Menampilkan data dengan perulangan while
                            while ($data = mysqli_fetch_array($hasil)):
                            $no++;
                        ?>
										<img src="admin/gambar/<?php echo $data['gambar'];?>" class="rounded" width='100%' alt="Gambar Data Vaksin">
										 <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- customer acquistion  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Data Vaksin Kota Pematangsiantar (.Pdf/.Xlsx)</h5>
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
                                                    $row = $conn->query("SELECT * FROM `file` limit 5") or die(mysqli_error(''));
                                                    while($fetch = $row->fetch_array()){
                                                ?>
                                            <tr>
                                                <?php 
                                                    $name = explode('/', $fetch['file']);
                                                ?>
                                                <td><?php echo $fetch['name']?></td>
                                                <td>
                                                    <a href="download_datatabel.php?file=<?php echo $name[1]?>" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Unduh</a>
                                                </td>
                                            </tr>
                                                <?php
                                                    }
                                                ?>
                                                </tbody>
                                        </table><br>
										<a href="datavaksin.php" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Selengkapnya...</a>
                                    </div>
                                </div>
                                <footer class="blockquote-footer">
                                    <cite title="Source Title">Update Terbaru : <?php echo "$fetch[datetime]"?></cite>
                                </footer>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h2 class="card-header" id="vaksin">Peta Sebaran Covid-19 Kota Pematangsiantar</h2>
                                    <div class="card-body p-0">
                                        <?php
                                            include 'database_gambar.php';
                                            $sql="select * from petasebaran order by id_gambar desc limit 1";
                                            $hasil=mysqli_query($kon,$sql);
                                            $no=0;
                                            //Menampilkan data dengan perulangan while
                                            while ($data = mysqli_fetch_array($hasil)):
                                            $no++;
                                        ?>
										<img src="admin/gambar/<?php echo $data['gambar'];?>" class="rounded" width='100%' alt="Gambar Data Vaksin">
										 <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>

                            <!-- ============================================================== -->
                            <!-- end customer acquistion  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card" id="kasus">
                                    <div class="card-header">
                                        Kasus Covid-19 Kota Pematangsiantar
                                    </div>
                                    <div class="card-body">
										<div class="table-responsive">
                                            <table class="table table-hover progress-table text-center">
                                                <thead class="text-uppercase">
                                                    <tr>
                                                        <th scope="col">Suspek (Dirawat)</th>
                                                        <th scope="col">Suspek (Meninggal)</th>
                                                        <th scope="col">Konfirmasi (Dirawat)</th>
                                                        <th scope="col">Terkonfirmasi (Sembuh)</th>
                                                        <th scope="col">Terkonfirmasi (Meninggal)</th>
                                                        <th scope="col">Tanggal Update</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php 
                                                    $no = 1;
                                                    $sql = $connect->query("SELECT * FROM t_infocvd ORDER BY id_user DESC LIMIT 1");
                                                    while ($data = $sql->fetch_array()) { 
                                                    echo"
                                                    <tr>
                                                        <td>$data[suspek_dirawat]</td>
                                                        <td>$data[suspek_meninggal]</td>
                                                        <td>$data[konfirmasi_dirawat]</td>
                                                        <td>$data[konfirmasi_sembuh]</td>
                                                        <td>$data[konfirmasi_meninggal]</td>
                                                        <td><span class='status-p bg-primary'>$data[created_date]</span></td>
                                                        ";  ?>
                                                     </tr>
                                                </tbody> 
                                            </table>

                                        <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="card border-3 border-top border-top-primary">
                                                <div class="card-body">
                                                    <h5 class="text-muted">SUSPEK (Dirawat)</h5>
                                                    <div class="metric-value d-inline-block">
                                                        <h1 class="mb-1"><?php echo "$data[suspek_dirawat]"?></h1>
                                                    </div>
                                                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                                        <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">%</span>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="card border-3 border-top border-top-primary">
                                                    <div class="card-body">
                                                        <h5 class="text-danger">SUSPEK (Meninggal)</h5>
                                                        <div class="metric-value d-inline-block">
                                                            <h1 class="mb-1"><?php echo "$data[suspek_meninggal]"?></h1>
                                                        </div>
                                                        <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                                            <span class="icon-circle-small icon-box-xs text-danger bg-danger-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="card border-3 border-top border-top-primary">
                                                    <div class="card-body">
                                                        <h5 class="text-muted">Terkonfirmasi (Dirawat)</h5>
                                                        <div class="metric-value d-inline-block">
                                                            <h1 class="mb-1"><?php echo "$data[konfirmasi_dirawat]"?></h1>
                                                        </div>
                                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="card border-3 border-top border-top-primary">
                                                    <div class="card-body">
                                                        <h5 class="text-success">Terkonfirmasi (Sembuh)</h5>
                                                        <div class="metric-value d-inline-block">
                                                            <h1 class="mb-1"><?php echo "$data[konfirmasi_sembuh]"?></h1>
                                                        </div>
                                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                                            <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="card border-3 border-top border-top-primary">
                                                    <div class="card-body">
                                                        <h5 class="text-danger">Terkonfirmasi (Meninggal)</h5>
                                                        <div class="metric-value d-inline-block">
                                                            <h1 class="mb-1"><?php echo "$data[konfirmasi_meninggal]"?></h1>
                                                        </div>
                                                        <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                                            <span class="icon-circle-small icon-box-xs text-danger bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="blockquote-footer">
                                            <cite title="Source Title">Update Terbaru : <?php echo "$data[created_date]"?></cite>
                                        </footer>
                                    </div>
                                </div>
                            </div>
 
			    <?php $no++; } ?>
                    <div class="row">
                          <!-- accrodions style four -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="section-block">
                                <h5 class="section-title">Berita dan Artikel Penanganan Covid-19</h5>
                                <p>corona.pematangsiantar.go.id</p>
                            </div>
                            <div class="accrodion-regular">
                                <div id="accordion4">
                                    <div class="card bg-primary">
                                        <div class="card-header" id="headingTen">
                                            <h5 class="mb-0">
                                               <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                                 <span class="fas fa-angle-down mr-3"></span>Berita
                                               </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTen" class="collapse show" aria-labelledby="headingTen" data-parent="#accordion4">
                                            <div class="card-body" id="berita1">
                                                <p class="lead text-white"> Angka Testing Indonesia Per Juli 2021 Sudah 4 Kali Melampaui Standar WHO</p>
                                                <p> JAKARTA (covid19.go.id)- Perkembangan angka testing (pemeriksaan) COVID-19 dalam setiap harinya menunjukkan angka yang dinamis. Dimana dalam melihat perkembangan data testing harian belum dapat menunjukkan gambaran secara menyeluruh kondisi testing secara nasional. </p>
                                                <p> Juru Bicara Satgas Penanganan COVID-19 Prof Wiku Adisasmito menjelaskan untuk bisa melihat gambaran kondisi angka testing secara menyeluruh, harus dilihat secara mingguan yang juga direkomendasikan Badan Kesehatan Dunia atau World Health Organization (WHO). </p>
                                                <img src="assets/images/jubir.jpeg" alt="jubir-covid" width="450" height="333" class="centero"><br><br>
                                                <a href="https://covid19.go.id/p/berita/angka-testing-indonesia-juli-2021-sudah-4-kali-melampaui-standar-who" class="btn btn-secondary">Selengkapnya...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-brand ">
                                        <div class="card-header" id="headingEleven">
                                            <h5 class="mb-0">
                                               <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                 <span class="fas fa-angle-down mr-3"></span>Artikel
                                                </button>      
                                            </h5>
                                        </div>
                                        <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion4">
                                            <div class="card-body" id="artikel">
                                                <p class="lead text-white"> Ketahui Cara Mengurangi Resiko</p>
                                                <p> Cara terbaik mencegah adalah tidak terpapar virus corona. Kebanyakan orang tertular langsung akibat menghirup percikan batuk atau napas orang sakit. Orang juga bisa tertular virus karena menyentuh permukaan benda yang tercemar percikan batuk atau napas orang sakit. Para ahli mengatakan virus corona dapat hidup di permukaan benda selama beberapa jam sampai beberapa hari dan karena itu, cuci tangan pakai sabun dan air mengalir menjadi sangat penting.</p>
                                                <a href="#" class="btn btn-secondary">Selengkapnya...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-secondary">
                                        <div class="card-header" id="headingTwelve">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed text-white" data-toggle="collapse"    data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                                <span class="fas fa-angle-down mr-3"></span>Berita
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion4">
                                            <div class="card-body">
                                                <p class="lead text-white"> Pemda Segera Perbaiki Indikator Penanganan Agar Nantinya Pembukaan Bertahap Berjalan Baik</p>
                                                <p> JAKARTA (covid19.go.id)- Perkembangan fluktuatif dalam 7 hari terakhir terlihat pada 7 provinsi Jawa - Bali yang menerapkan Pemberlakuan Pembatasan Kegiatan Masyarakat (PPKM) Darurat. Perkembangan ini menjadi dasar penilaian kesiapan kepada pemerintah daerah (Pemda) untuk masuk ke tahap relaksasi dari kebijakan pengetatan. 

                                                    Juru Bicara Satgas Penanganan Covid-19 Prof Wiku Adisasmito menyebut ada beberapa pertimbangan untuk melihat kesiapannya. Hal ini dilihat dari cakupan perkembangan penanganan kasus positif, kesembuhan, kematian serta keterisian tempat tidur atau bed of ratio (BOR) harian. Selain itu perlu diperhatikan jumlah desa/kelurahan yang tidak patuh protokol kesehatan dan cakupan posko yang melaporkan kinerja.</p>
                                                <a href="#" class="btn btn-secondary">Selengkapnya...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end accrodions style four -->
                        <!-- ============================================================== -->
                          <!-- accrodions style four -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="section-block">
                                <h5 class="section-title">Infografik Protokol Kesehatan</h5>
                                <p>Web Resmi Portal Informasi Kasus Covid-19 Kota Pematangsiantar</p>
                            </div>
                            <div class="accrodion-regular">
                                <div id="accordion5">
                                    <div class="card bg-primary">
                                        <div class="card-header" id="headingTen">
                                            <h5 class="mb-0">
                                               <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                                 <span class="fas fa-angle-down mr-3"></span>Yuk Pakai 2 Masker!
                                               </button>
                                              </h5>
                                        </div>
                                        <div id="collapseTen" class="collapse show" aria-labelledby="headingTen" data-parent="#accordion5">
                                            <div class="card-body">
                                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                                    </ol>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="assets/images/dua-masker-1.jpeg" alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="assets/images/dua-masker-2.jpeg" alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="assets/images/dua-masker-3.jpeg" alt="Third slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="assets/images/dua-masker-4.jpeg" alt="Fourth slide">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                       <span class="sr-only">Sebelumnya</span>  </a>
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Selanjutnya</span>  </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end accrodions style four -->
                        <!-- ============================================================== -->
        </div>


         <!-- card navigaion  -->
                        <!-- ============================================================== -->
                        
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="c-nav">
                                    <h3 class="section-title">FAQ Pertanyaan Terkait Covid-19</h3>
                                    <p>Sumber : Kemenkes RI</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header tab-regular">
                                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="card-tab-1" data-toggle="tab" href="#card-1" role="tab" aria-controls="card-1" aria-selected="true">FAQ 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="card-tab-2" data-toggle="tab" href="#card-2" role="tab" aria-controls="card-2" aria-selected="false">FAQ 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="card-tab-3" data-toggle="tab" href="#card-3" role="tab" aria-controls="card-3" aria-selected="false">FAQ 3</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="card-1" role="tabpanel" aria-labelledby="card-tab-1">
                                                <div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; text-align: left;'><b style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(7, 55, 99);"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(7, 55, 99);"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(61, 133, 198);"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(11, 83, 148);">1 Apakah Coronavirus dan COVID-19 itu?</span></span></span></span></b></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Coronavirus merupakan keluarga besar virus yang menyebabkan penyakit pada manusia dan hewan. Pada manusia biasanya menyebabkan penyakit infeksi saluran pernapasan, mulai flu biasa hingga penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan Sindrom Pernafasan Akut Berat/ Severe Acute Respiratory Syndrome (SARS). Coronavirus jenis baru yang ditemukan pada manusia sejak kejadian luar biasa muncul di Wuhan Cina, pada Desember 2019, kemudian diberi nama Severe Acute Respiratory Syndrome Coronavirus 2 (SARS-COV2), dan menyebabkan penyakit Coronavirus Disease-2019 (COVID-19).</div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><br></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><b style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(11, 83, 148);">2 Apakah COVID-19 sama seperti SARS?</span></b></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>COVID-19 disebabkan oleh SARS-COV2 yang termasuk dalam keluarga besar coronavirus yang sama dengan penyebab SARS pada tahun 2003, hanya berbeda jenis virusnya. Gejalanya mirip dengan SARS, namun angka kematian SARS (9,6%) lebih tinggi dibanding COVID-19 (kurang dari 5%), walaupun jumlah kasus COVID-19 jauh lebih banyak dibanding SARS. COVID-19 juga memiliki penyebaran yang lebih luas dan cepat ke beberapa negara dibanding SARS.</div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><br></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><b style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(11, 83, 148);">3 Apa saja gejala COVID-19?</span></b></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Gejala umum berupa demam 380C, batuk kering, dan sesak napas. Jika ada orang yang dalam 14 hari sebelum muncul gejala tersebut pernah melakukan perjalanan ke negara terjangkit, atau pernah merawat/kontak erat dengan penderita COVID-19, maka terhadap orang tersebut akan dilakukan pemeriksaan laboratorium lebih lanjut untuk memastikan diagnosisnya. Daftar negara terjangkit dapat dipantau melalui website ini.</div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><br></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><b style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(11, 83, 148);">4 Seberapa bahayanya COVID-19 ini?</span></b></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Seperti penyakit pernapasan lainnya, COVID-19 dapat menyebabkan gejala ringan termasuk pilek, sakit tenggorokan, batuk, dan demam. Sekitar 80% kasus dapat pulih tanpa perlu perawatan khusus. Sekitar 1 dari setiap 6 orang mungkin akan menderita sakit yang parah, seperti disertai pneumonia atau kesulitan bernafas, yang biasanya muncul secara bertahap. Walaupun angka kematian penyakit ini masih rendah (sekitar 3%), namun bagi orang yang berusia lanjut, dan orang-orang dengan kondisi medis yang sudah ada sebelumnya (seperti diabetes, tekanan darah tinggi dan penyakit jantung), mereka biasanya lebih rentan untuk menjadi sakit parah. Melihat perkembangan hingga saat ini, lebih dari 50% kasus konfirmasi telah dinyatakan membaik, dan angka kesembuhan akan terus meningkat.</div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><br></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><b style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(11, 83, 148);">5 Bagaimana manusia bisa terinfeksi COVID-19?</span></b></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Seseorang dapat terinfeksi dari penderita COVID-19. Penyakit ini dapat menyebar melalui tetesan kecil (droplet) dari hidung atau mulut pada saat batuk atau bersin. Droplet tersebut kemudian jatuh pada benda di sekitarnya. Kemudian jika ada orang lain menyentuh benda yang sudah terkontaminasi dengan droplet tersebut, lalu orang itu menyentuh mata, hidung atau mulut (segitiga wajah), maka orang itu dapat terinfeksi COVID-19. Atau bisa juga seseorang terinfeksi COVID-19 ketika tanpa sengaja menghirup droplet dari penderita. Inilah sebabnya mengapa kita penting untuk menjaga jarak hingga kurang lebih satu meter dari orang yang sakit.</div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Sampai saat ini, para ahli masih terus melakukan penyelidikan untuk menentukan sumber virus, jenis paparan, dan cara penularannya. Tetap pantau sumber informasi yang akurat dan resmi mengenai perkembangan penyakit ini.</div>
                                                
                                            </div>
                                            <div class="tab-pane fade" id="card-2" role="tabpanel" aria-labelledby="card-tab-2">
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><b style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(11, 83, 148);">6 Apakah COVID-19 dapat ditularkan dari orang yang tidak bergejala?</span></b></div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">Cara penularan utama penyakit ini adalah melalui tetesan kecil (droplet) yang dikeluarkan pada saat seseorang batuk atau bersin. Saat ini WHO menilai bahwa risiko penularan dari seseorang yang tidak bergejala COVID-19 sama sekali sangat kecil kemungkinannya. Namun, banyak orang yang teridentifikasi COVID-19 hanya mengalami gejala ringan seperti batuk ringan, atau tidak mengeluh sakit, yang mungkin terjadi pada tahap awal penyakit. Sampai saat ini, para ahli masih terus melakukan penyelidikan untuk menentukan periode penularan atau masa inkubasi COVID-19. Tetap pantau sumber informasi yang akurat dan resmi mengenai perkembangan penyakit ini.</div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><br></div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><b style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(11, 83, 148);">7 Apakah virus penyebab COVID-19 dapat ditularkan melalui udara?</span></b></div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">Tidak. Hingga saat ini penelitian menyebutkan bahwa virus penyebab COVID-19 ditularkan melalui kontak dengan tetesan kecil (droplet) dari saluran pernapasan.</div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><br></div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><b style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(11, 83, 148);">8 Bisakah manusia terinfeksi COVID-19 dari hewan?</span></b></div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">COVID-19 disebabkan oleh salah satu jenis virus dari keluarga besar Coronavirus, yang umumnya ditemukan pada hewan. Sampai saat ini sumber hewan penular COVID-19 belum diketahui, para ahli terus menyelidiki berbagai kemungkinan jenis hewan penularnya.</div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><br></div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><b style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(11, 83, 148);">9 Bisakah hewan peliharaan menyebarkan COVID-19?</span></b></div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">Saat ini, belum ditemukan bukti bahwa hewan peliharaan seperti anjing atau kucing dapat terinfeksi virus COVID-19. Namun, akan jauh lebih baik untuk selalu mencuci tangan dengan sabun dan air setelah kontak dengan hewan peliharaan. Kebiasaan ini dapat melindungi Anda terhadap berbagai bakteri umum seperti E.coli dan Salmonella yang dapat berpindah antara hewan peliharaan dan manusia.</div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><br></div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><b style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(11, 83, 148);">10 Berapa lama virus ini bertahan di permukaan benda?</span></b></div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">Sampai saat ini belum diketahui dengan pasti berapa lama COVID-19 mampu bertahan di permukaan suatu benda, meskipun studi awal menunjukkan bahwa COVID-19 dapat bertahan hingga beberapa jam, tergantung jenis permukaan, suhu, atau kelembaban lingkungan. Namun disinfektan sederhana dapat membunuh virus tersebut sehingga tidak mungkin menginfeksi orang lagi. Dan membiasakan cuci tangan dengan air dan sabun, atau hand-rub berbasis alkohol, serta hindari menyentuh mata, mulut atau hidung (segitiga wajah) lebih efektif melindungi diri Anda.</div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><br></div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><b style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(11, 83, 148);">11 Apakah sudah ada vaksin untuk COVID-19?</span></b></div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">Vaksin untuk mencegah infeksi COVID-19 sedang dalam tahap pengembangan/uji coba.</div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><br></div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><b style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(11, 83, 148);">12 Apakah antibiotik efektif dalam mencegah dan mengobati COVID-19?</span></b></div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;">Tidak, antibiotik hanya bekerja untuk melawan bakteri, bukan virus. Oleh karena COVID-19 disebabkan oleh virus, maka antibiotik tidak bisa digunakan sebagai sarana pencegahan atau pengobatan. Namun, jika Anda dirawat di rumah sakit dan didiagnosis COVID-19, Anda mungkin akan diberikan antibiotik, karena seringkali terjadi infeksi sekunder yang disebabkan bakteri.</div>
                                                <div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><br style="color: rgb(0, 0, 0); font-family: ants-thin, &quot;Century Gothic&quot;, Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;"></div>
                                            </div>
                                            <div class="tab-pane fade" id="card-3" role="tabpanel" aria-labelledby="card-tab-3">
                                                <div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><b style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(11, 83, 148);">13 Siapa saja yang berisiko terinfeksi COVID-19?</span></b></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Orang yang tinggal atau bepergian di daerah di mana virus COVID-19 bersirkulasi sangat mungkin berisiko terinfeksi. Mereka yang terinfeksi adalah orang-orang yang dalam 14 hari sebelum muncul gejala melakukan perjalanan dari negara terjangkit, atau yang kontak erat, seperti anggota keluarga, rekan kerja atau tenaga medis yang merawat pasien sebelum mereka tahu pasien tersebut terinfeksi COVID-19.</div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Petugas kesehatan yang merawat pasien yang terinfeksi COVID-19 berisiko lebih tinggi dan harus konsisten melindungi diri mereka sendiri dengan prosedur pencegahan dan pengendalian infeksi yang tepat.</div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><br></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><b style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(11, 83, 148);">14 Manakah yang lebih rentan terinfeksi coronavirus, apakah orang yang lebih tua, atau orang yang lebih muda?</span></b></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Orang yang terinfeksi COVID-19 dan influenza akan mengalami gejala infeksi saluran pernafasan yang sama, seperti demam, batuk dan pilek. Walaupun gejalanya sama, tapi penyebab virusnya berbeda-beda, sehingga kita sulit mengidentifikasi masing-masing penyakit tersebut. Pemeriksaan medis yang akurat disertai rujukan pemeriksaan laboratorium sangat diperlukan untuk mengonfirmasi apakah seseorang terinfeksi COVID-19. Bagi setiap orang yang menderita demam, batuk, dan sulit bernapas sangat direkomendasikan untuk segera mencari pengobatan, dan memberitahukan petugas kesehatan jika mereka telah melakukan perjalanan dari wilayah terjangkit dalam 14 hari sebelum muncul gejala, atau jika mereka telah melakukan kontak erat dengan seseorang yang sedang menderita gejala infeksi saluran pernafasan.</div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Tidak ada batasan usia orang-orang dapat terinfeksi oleh coronavirus ini (COVID-19). Namun orang yang lebih tua, dan orang-orang dengan kondisi medis yang sudah ada sebelumnya (seperti asma, diabetes, penyakit jantung, atau tekanan darah tinggi) tampaknya lebih rentan untuk menderita sakit parah.</div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><br></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><b style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(11, 83, 148);">15 Bagaimana membedakan antara sakit akibat infeksi COVID-19, dengan influenza biasa?</span></b></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Orang yang terinfeksi COVID-19 dan influenza akan mengalami gejala infeksi saluran pernafasan yang sama, seperti demam, batuk dan pilek. Walaupun gejalanya sama, tapi penyebab virusnya berbeda-beda, sehingga kita sulit mengidentifikasi masing-masing penyakit tersebut. Pemeriksaan medis yang akurat disertai rujukan pemeriksaan laboratorium sangat diperlukan untuk mengonfirmasi apakah seseorang terinfeksi COVID-19. Bagi setiap orang yang menderita demam, batuk, dan sulit bernapas sangat direkomendasikan untuk segera mencari pengobatan, dan memberitahukan petugas kesehatan jika mereka telah melakukan perjalanan dari wilayah terjangkit dalam 14 hari sebelum muncul gejala, atau jika mereka telah melakukan kontak erat dengan seseorang yang sedang menderita gejala infeksi saluran pernafasan.16 Berapa lama waktu yang diperlukan sejak tertular/terinfeksi hingga muncul gejala penyakit infeksi COVID-19?</div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><br></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><b style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(11, 83, 148);">17 Amankah jika kita menerima paket barang dari Cina atau dari negara lain yang melaporkan virus ini?</span></b></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Ya, aman. Orang yang menerima paket tidak berisiko tertular virus COVID-19. Dari pengalaman dengan coronavirus lain, kita tahu bahwa jenis virus ini tidak bertahan lama pada benda mati, seperti surat atau paket.</div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><br></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><b style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(11, 83, 148);">18 Apakah sudah ada pembatasan untuk bepergian ke Cina dan negara terjangkit lainnya?</span></b></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Sejak 5 Februari 2020, Indonesia telah memberlakukan pembatasan perjalanan ke Cina berupa penghentian sementara penerbangan dari dan ke Cina.</div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Pada tanggal 5 Maret 2020, Indonesia juga memberlakukan pelarangan transit atau masuk ke Indonesia bagi pelaku perjalanan yang dalam 14 hari sebelumnya datang dari wilayah berikut:</div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Iran : Tehran, Qom, Gilan</div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Italia : Wilayah Lombardi, Veneto, Emilia Romagna, Marche dan Piedmont</div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>Korea Selatan : Kota Daegu dan Propinsi Gyeongsangbuk-do.</div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><br></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'><b style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(11, 83, 148);">19 Berapa banyak orang yang telah terinfeksi oleh COVID-19 dan negara mana saja yang sudah ada kasusnya?</span></b></div>
<div style='margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: ants-thin, "Century Gothic", Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>WHO secara ketat memantau situasi terkini dan secara teratur menerbitkan informasi tentang penyakit ini. Informasi lebih lanjut mengenai penyakit ini beserta daftar negara yang terjangkit dapat dilihat melalui: Info Coronavirus WHO Online.</div>
<div style="margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;"><br style="color: rgb(0, 0, 0); font-family: ants-thin, &quot;Century Gothic&quot;, Arial, cursive; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                   
                                    <div class="card-header pills-regular">
                                        <div class="section-block" id="c-nav">
                                            <h4 class="section-title">History Kasus Covid19 (Infografik) & Video Kasus Covid-19 Kota Pematangsiantar</h4>
                                        </div>
                                        <ul class="nav nav-pills card-header-pills" id="myTab2" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="card-pills-1" data-toggle="tab" href="#card-pill-1" role="tab" aria-controls="card-1" aria-selected="true">Video Terkait Penanganan Kasus Covid-19</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="card-pills-2" data-toggle="tab" href="#card-pill-2" role="tab" aria-controls="card-2" aria-selected="false">Infografik Kasus Covid-19</a>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="myTabContent2">
                                            <div class="tab-pane fade show active" id="card-pill-1" role="tabpanel" aria-labelledby="card-tab-1">
                                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                                    </ol>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <iframe width="600" height="750" src="https://www.youtube.com/embed/nIOvWkFLoa8" class="centero">   
                                                            </iframe>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <iframe width="600" height="750" src="https://www.youtube.com/embed/WHr1XcTuUyg" class="centero">   
                                                            </iframe>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <iframe width="600" height="750" src="https://www.youtube.com/embed/HV4itXhl_N8" class="centero">   
                                                            </iframe>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <iframe width="600" height="750" src="https://www.youtube.com/embed/GhuJvD7dLeE" class="centero">   
                                                            </iframe>
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                       <span class="sr-only">Sebelumnya</span>  </a>
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Selanjutnya</span>  </a>
                                                </div>
                                            </div>
                                           
                                            <div class="tab-pane fade" id="card-pill-2" role="tabpanel" aria-labelledby="card-tab-2">
                                              
                                                                <img src="assets/images/infoodp.jpeg" alt="infoodp" width="700" height="750" class="centero"><br><br>
                                                            </div>
                                                            
                                                 </div>
                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end card navigaion  -->
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
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
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
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>