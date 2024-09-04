<?php
session_start(); 

if( ! isset($_SESSION['username'])){ 
	header("location: index.php"); 
}
?>

<?php 
  			include "koneksi.php";
            include "alert.php";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Panel Admin Web Covid-19</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets_sd/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets_sd/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_sd/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets_sd/css/themify-icons.css">
    <link rel="stylesheet" href="assets_sd/css/metisMenu.css">
    <link rel="stylesheet" href="assets_sd/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets_sd/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets_sd/css/typography.css">
    <link rel="stylesheet" href="assets_sd/css/default-css.css">
    <link rel="stylesheet" href="assets_sd/css/styles.css">
    <link rel="stylesheet" href="assets_sd/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets_sd/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="page-container">
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="beranda.php"><img src="assets_sd/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true" class="active"><i class="ti-dashboard"></i><span>Beranda</span></a>
                                <ul class="collapse">
                                    <li><a href="beranda.php">Isi Data Covid-19 dan Vaksin</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Pencarian Data..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            
                            <li class="dropdown">
                                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                <div class="dropdown-menu notify-box nt-enveloper-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets_sd/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets_sd/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">When you can connect with me...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets_sd/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">I missed you so much...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets_sd/images/author/author-img4.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Your product is completely Ready...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets_sd/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets_sd/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets_sd/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Portal</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="beranda.php">Beranda</a></li>
                                <li><span>Isi Data Covid-19</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets_sd/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['nama']; ?><i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="logout.php">Keluar</a> 	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Portal Data Covid-19 & Data Vaksin Kota Pematangsiantar</h4>
                        <blockquote class="blockquote">
                            <p class="mb-3"> Selamat Datang, <?php echo $_SESSION['nama']; ?> Halaman ini merupakan Halaman pengisian Data Covid-19 dan Data Vaksin Kota Pematangsiantar. <br>Setiap Data yang ditambahkan pada 
                                halaman ini akan tampil di web resmi covid-19 Pematangsiantar sebagai informasi kepada Masyarakat.
                            </p>
                            <footer class="blockquote-footer">corona.pematangsiantar.go.id
                                <cite title="Source Title">Web Covid-19 Pemko Pematangsiantar
                                </cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="main-content-inner">
                <div class="row">
                    <!-- tab start -->
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Data Covid-19</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Data Vaksin</a>
                                    </li>
                                    
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">          
                                        

              <!-- Progress Table start -->
              <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">History Data Covid-19 Kota Pematangsiantar</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hover progress-table text-center">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Suspek (Dirawat)</th>
                                            <th scope="col">Suspek (Meninggal)</th>
                                            <th scope="col">Konfirmasi (Dirawat)</th>
                                            <th scope="col">Terkonfirmasi (Sembuh)</th>
                                            <th scope="col">Terkonfirmasi (Meninggal)</th>
                                            <th scope="col">Tanggal Update</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
			            		$no = 1;
			            		$sql = $connect->query("SELECT * FROM t_infocvd ");
			            		while ($data = $sql->fetch_array()) { 
			            		echo"

                                <tr>
                                <td>$no</td>
                                <td>$data[suspek_dirawat]</td>
                                <td>$data[suspek_meninggal]</td>
                                <td>$data[konfirmasi_dirawat]</td>
                                <td>$data[konfirmasi_sembuh]</td>
                                <td>$data[konfirmasi_meninggal]</td>
                                <td><span class='status-p bg-primary'>$data[created_date]</span></td>
                                <td><a href='?mod=edit&id=$data[id_user]'><button type='button' class='btn btn-success'><span class='glyphicon glyphicon-edit'></span> Edit</button></a> "; ?>
                                <a href='aksi.php?mod=delete&id=<?php echo $data['id_user'];?>' onClick="return confirm('Yakin akan menghapus Data?')"><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-remove-sign'>Delete</button></a></td>
                              </tr>
                              <?php $no++; } ?>   
                                    </tbody>
                                </table>
                            </div>
                            <button type="button" class="btn btn-success btn-md mb-3"><a href="create_cvd.php">Tambah Data Covid-19</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <h4 class="header-title">Tabel Data Vaksin  (.jpg)</h4>
                        <div class="table-responsive">
                         <table align = "left"class="table table-hover progress-table text-center" >
                            <thead class="text-capitalize">
                            <tr>
                                <th>No</th>
                                <th width='60%'>Data Vaksin</th>
								 <th>Waktu Unggah</th> 
                                <th>Aksi</th>
                            </tr> 
                        	</thead>
							  <tbody>
                        <?php
 							 include 'database_gambar.php';
                            $sql="select * from gambar order by id_gambar desc limit 10";
                            $hasil=mysqli_query($kon,$sql);
                            $no=0;
                            //Menampilkan data dengan perulangan while
                            while ($data = mysqli_fetch_array($hasil)):
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><img src="gambar/<?php echo $data['gambar'];?>" class="rounded" width='100%' alt="Gambar Data Vaksin"></td>
							 <td><?php echo $data['datetime']; ?></td>
                            <td><a href="hapus_gambar.php?id_gambar=<?php echo $data['id_gambar'];?>&gambar=<?php echo $data['gambar'];?>" onclick="konfirmasi()" class="btn btn-danger" role="button">Hapus</a></td>
                        </tr>
                        <!-- bagian akhir (penutup) while -->
                        <?php endwhile; ?>
				
                        	</tbody>
						</table>
							 <button type="button" class="btn btn-success btn-md mb-3"><a href="datavaksin_gambar.php">Unggah Data (.Jpg)</button></a>
                        </div>
                </div>

                     
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <h4 class="header-title">Tabel Data Vaksin (.xlsx)</h4>
                        <div class="table-responsive">
                        <table align = "right" class="table table-hover progress-table text-center" >
                        <thead class="text-capitalize">				
      						<tr>  
        					<th>No</th>
        					<th>Nama File</th>
        					<th>Aksi</th>
      						</tr>
    					</thead>
                        <tbody class="alert-success">
      						<?php
							 	require 'config_datatabel.php';
      							$row = $conn->query("SELECT * FROM `file` limit 10") or die(mysqli_error(''));
      							while($fetch = $row->fetch_array()){
       						?>
       					<tr>
        					<?php 
        						$name = explode('/', $fetch['file']);
        					?>
        					<td><?php echo $fetch['file_id']?></td>
        					<td><?php echo $fetch['name']?></td>
        					<td>
								<a href="download_datatabel.php?file=<?php echo $name[1]?>" class="btn 									btn-primary"><span class="glyphicon glyphicon-download"></span> Unduh</a>
								<a href="#"><button type='button' class='btn btn-danger'><span 											class='glyphicon glyphicon-remove-sign'>Hapus</button></a>
							</td>
      					</tr>
      						<?php
    							}
    						?>
  						</tbody>
                        
                        </table>
							 <button type="button" class="btn btn-success btn-md mb-3"><a href="datavaksin_datatabel.php">Unggah File Baru</button></a>
                        </div>
                    </div>
                
                </div>
            </div>
                    <!-- tab end -->
                   
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2021. Seksi Pengembangan Aplikasi - Diskominfo Pematangsiantar</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Added</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You missed you Password!</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You Added Kaji Patha few minutes ago</h4>
                            <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Ratul Hamba sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Hello sir , where are you, i am egerly waiting for you.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show your emails</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Show email so that easily find you.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets_sd/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets_sd/js/popper.min.js"></script>
    <script src="assets_sd/js/bootstrap.min.js"></script>
    <script src="assets_sd/js/owl.carousel.min.js"></script>
    <script src="assets_sd/js/metisMenu.min.js"></script>
    <script src="assets_sd/js/jquery.slimscroll.min.js"></script>
    <script src="assets_sd/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets_sd/js/plugins.js"></script>
    <script src="assets_sd/js/scripts.js"></script>
</body>

</html>
