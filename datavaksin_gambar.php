<?php
session_start(); 

if( ! isset($_SESSION['username'])){ 
	header("location: index.php"); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Unggah Data Vaksin Kota Pematangsiantar (IMAGE)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.js"></script>
</head>
<body>
<br /><br />
  <div class="container">
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
     <div class="navbar-header">
      <h2 class="navbar-brand">Halaman Upload File Data Vaksin (IMAGE)</h2>
    </div>
  </div>
  </nav>
    <br>
    <div class="container">
        <?php
        //Validasi untuk menampilkan pesan pemberitahuan
        if (isset($_GET['add'])) {
      
            if ($_GET['add']=='berhasil'){
                echo"<div class='alert alert-success'><strong>Berhasil!</strong> File gambar telah diupload!</div>";
            }else if ($_GET['add']=='gagal'){
                echo"<div class='alert alert-danger'><strong>Gagal!</strong> File gambar gagal diupload!</div>";
            }    
        }

        if (isset($_GET['hapus'])) {
    
            if ($_GET['hapus']=='berhasil'){
                echo"<div class='alert alert-success'><strong>Berhasil!</strong> File gambar telah dihapus!</div>";
            }else if ($_GET['hapus']=='gagal'){
                echo"<div class='alert alert-danger'><strong>Gagal!</strong> File gambar gagal dihapus!</div>";
            }    
        }
        ?>
        <form action="simpan_gambar.php" method="post" enctype="multipart/form-data">
            <!-- rows -->   
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <div id="msg"></div>
                        <input type="file" name="gambar" class="file" >
                            <div class="input-group my-3">
                                <input type="text" class="form-control" disabled placeholder="Upload Data Vaksin (Image)" id="file">  
                                <div class="input-group-append">
                                        <button type="button" id="pilih_gambar" class="browse btn btn-dark">Pilih Data</button>
									
                                </div>
                            </div> 
<div>
<button type="submit" name="btn_simpan" class="btn btn-success">Upload</button>
						</div>
<br>
                            <table>
                           
                        <td><img src="gambar/80x80.png" id="preview" class="img-thumbnail"></td>
                        <td><h6>&nbsp;&nbsp;*Sesuaikan ukuran banner informasi vaksin 1075x1075px</h6></td>
                        </table>
                    </div>
                </div>
            </div>

                
        </form>

        <hr>
        <div class="row">
            <div class="col-sm-6">
                <div class="table-responsive">
                    <h5><center>Data Vaksin Terbaru (Image) <?php echo $data['datetime'];?></center> </h5>
                    <table class="table table-bordered" width='20%'cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th width='60%'>Gambar</th> 
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            // include database
                            include 'database_gambar.php';
							include "fungsi_waktu.php";
                            // perintah sql untuk menampilkan daftar bank yang berelasi dengan tabel kategori bank
                            $sql="select * from gambar order by id_gambar desc limit 1";
                            $hasil=mysqli_query($kon,$sql);
                            $no=0;
                            //Menampilkan data dengan perulangan while
                            while ($data = mysqli_fetch_array($hasil)):
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><img src="gambar/<?php echo $data['gambar'];?>" class="rounded" width='100%' alt="Data Vaksin"></td>
                            <td><a href="hapus_gambar.php?id_gambar=<?php echo $data['id_gambar'];?>&gambar=<?php echo $data['gambar'];?>" onclick="konfirmasi()" class="btn btn-danger" role="button">Hapus</a></td>
                        </tr>
                        <!-- bagian akhir (penutup) while -->
                        <?php endwhile; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-success" ><a href="beranda.php">kembali ke Beranda</a></button> <br><br>
</body>
</html>

<style>
    .file {
    visibility: hidden;
    position: absolute;
    }
</style>

<script>

    function konfirmasi(){
        konfirmasi=confirm("Apakah anda yakin ingin menghapus gambar ini?")
        document.writeln(konfirmasi)
    }

    $(document).on("click", "#pilih_gambar", function() {
    var file = $(this).parents().find(".file");
    file.trigger("click");
    });

    $('input[type="file"]').change(function(e) {
    var fileName = e.target.files[0].name;
    $("#file").val(fileName);

    var reader = new FileReader();
    reader.onload = function(e) {
        // get loaded data and render thumbnail.
        document.getElementById("preview").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
    });
</script>
