<?php
session_start(); 

if( ! isset($_SESSION['username'])){ 
	header("location: index.php"); 
}

include "koneksi.php";
switch(@$_GET['mod']) {
	default:

?>

<!DOCTYPE html> 
<html lang="en">
	<head> 
		<title>Update Data Covid Pematangsiantar</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta name="Author" content="edi sutanto">
		<link rel="shortcut icon" href="">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap.min.css"> -->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
		<!-- <script type='javascript' src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script> -->


	</head>

	<body>

  		<div class="container-fluid">
  			<div class="blog-header">
			        <h1 class="blog-title">Portal Data Admin Web Covid-19 Pematangsiantar</h1>
			        <p class="lead blog-description"><a href='http://www.corona.pematangsiantar.go.id' target='_blank'>www.corona.pematangsiantar.go.id</a></p>
					<a href="logout.php">Logout</a>
			      </div>

			      <p><a href='?mod=add'><button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-plus-sign'></span> Tambah Data Covid-19</button></a></p>

			    <div class="row">	

			      	<div class="col-md-8">

			      	  <?php include"alert.php"; ?>

			          <table class="table table-striped">
			            <thead>
			              <tr>
			                <th>No.</th>
			                <th>Suspek (Dirawat)</th>
			                <th>Suspek (Meninggal)</th>
			                <th>Konfirmasi (Dirawat)</th>
			                <th>Terkonfirmasi (Sembuh)</th>
			                <th>Terkonfirmasi (Meninggal)</th>
			                <th>Tanggal Update</th>
			                <th>Action</th>
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
			                <td>$data[created_date]</td>
			                <td><a href='?mod=edit&id=$data[id_user]'><button type='button' class='btn btn-success'><span class='glyphicon glyphicon-edit'></span> Edit</button></a> "; ?>
			                <a href='aksi.php?mod=delete&id=<?php echo $data['id_user'];?>' onClick="return confirm('Yakin akan menghapus Data?')"><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-remove-sign'>Delete</button></a></td>
			              </tr>
			              <?php $no++; } ?>
			            </tbody>
			          </table>
		       		</div>
			    <?php 
			    break;


	   			case 'add': ?>
				    <form method='POST' action='aksi.php?mod=tambah' class='form-horizontal'>
				    <h2>Tambah Data Covid-19 Pematangsiantar Per Hari Ini </h2>
					<div class="form-group">
					    <label class="col-sm-1 control-label">Suspek (Dirawat)</label>
					    <div class="col-sm-4">
					      <input type="number" name='konfirmasi_meninggal' class="form-control" placeholder="0">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-1 control-label">Suspek (Meninggal)</label>
					    <div class="col-sm-4">
					      <input type="number" name='suspek_dirawat' class="form-control" placeholder="0">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-1 control-label">Konfirmasi (Dirawat)</label>
					    <div class="col-sm-4">
					      <input type="number" name='suspek_meninggal' class="form-control" placeholder="0">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-1 control-label">Terkonfirmasi (Sembuh)</label>
					    <div class="col-sm-4">
					      <input type="number" name='konfirmasi_dirawat' class="form-control" placeholder="0">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-1 control-label">Terkonfirmasi (Meninggal)</label>
					    <div class="col-sm-4">
					      <input type="number" name='konfirmasi_sembuh' class="form-control" placeholder="0">
					    </div>
					  </div>

					  <div class="form-group">
					    <div class="col-sm-offset-1 col-sm-4">
					      <button type='submit' name='submit' class='btn btn-primary' onClick="return confirm('Konfirmasi Penambahan Data?')">Tambah</button>
					    </div>
					  </div>
					</form>
				<?php
				break;
				
				case 'edit':
					$sql = $connect->query("SELECT * FROM t_infocvd WHERE id_user ='$_GET[id]' ");
					$data = $sql->fetch_array();
					
					?>
				    <form method='POST' action='aksi.php?mod=edit' class='form-horizontal'>
				    <h2>Edit Data Covid-19 Per-Tanggal <?php echo $data['created_date'];?> </h2>
				    	<!-- post kan id user type hidden-->
				    	<input type='hidden' name='id_user' value='<?php echo $data['id_user'];?>'>
					  <div class="form-group">
					    <label class="col-sm-1 control-label">Suspek (Dirawat)</label>
					    <div class="col-sm-4">
					      <input type="number" name='suspek_dirawat' class="form-control"  value="<?php echo $data['suspek_dirawat'];?> ">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-1 control-label">Suspek (Meninggal)</label>
					    <div class="col-sm-4">
					      <input type="number" name='suspek_meninggal' class="form-control"  value="<?php echo $data['suspek_meninggal'];?> ">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-1 control-label">Konfirmasi (Dirawat)</label>
					    <div class="col-sm-4">
					      <input type="number" name='konfirmasi_dirawat' class="form-control"  value="<?php echo $data['konfirmasi_dirawat'];?> ">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-1 control-label">Konfirmasi (Sembuh)</label>
					    <div class="col-sm-4">
					      <input type="number" name='konfirmasi_sembuh' class="form-control"  value="<?php echo $data['konfirmasi_sembuh'];?> ">
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="col-sm-1 control-label">Konfirmasi (Meninggal)</label>
					    <div class="col-sm-4">
					      <input type="number" name='konfirmasi_meninggal' class="form-control"  value="<?php echo $data['konfirmasi_meninggal'];?> ">
					    </div>
					  </div>

					  <div class="form-group">
					    <div class="col-sm-offset-1 col-sm-4">
					      <button type='submit' name='submit' class='btn btn-primary' onClick="return confirm('Lanjut Mengubah Data?')">Simpan</button>
					      <button type='reset' name='reset' class='btn btn-primary'>Reset</button>
					    </div>
					  </div>
					</form>
				<?php
				break;
			} ?>

			</div>
		</div>
	</body>
</html>