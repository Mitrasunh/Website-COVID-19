<?php
session_start(); 

if( ! isset($_SESSION['username'])){ 
	header("location: index.php"); 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Data Covid-19</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";
    include "fungsi_waktu.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $suspek_dirawat=input($_POST["suspek_dirawat"]);
        $suspek_meninggal=input($_POST["suspek_meninggal"]);
        $konfirmasi_dirawat=input($_POST["konfirmasi_dirawat"]);
        $konfirmasi_sembuh=input($_POST["konfirmasi_sembuh"]);
        $konfirmasi_meninggal=input($_POST["konfirmasi_meninggal"]);
              
        //Query input menginput data kedalam tabel anggota
        $sql="insert into t_infocvd (suspek_dirawat,suspek_meninggal,konfirmasi_dirawat,konfirmasi_sembuh,konfirmasi_meninggal,created_date) values
		('$suspek_dirawat','$suspek_meninggal','$konfirmasi_dirawat','$konfirmasi_sembuh','$konfirmasi_meninggal','$datetime')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($connect,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:beranda.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    <h2 class="text-justify">Pengisian Data Harian Covid-19 Kota Pematangsiantar <?php echo date('l, d-m-Y') ?>-</h2>
    <a href="beranda.php" class="font-weight-bold ml-1">Kembali ke Beranda</a><br><br>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>Suspek (Dirawat)</label>
            <input type="number" name="suspek_dirawat" class="form-control" placeholder="" required />

        </div>
        <div class="form-group">
            <label>Suspek (Meninggal)</label>
            <input type="number" name="suspek_meninggal" class="form-control" placeholder="" required />

        </div>
        <div class="form-group">
            <label>Konfirmasi (Dirawat)</label>
            <input type="number" name="konfirmasi_dirawat" class="form-control" placeholder="" required />

        </div>
        <div class="form-group">
            <label>Konfirmasi (Sembuh)</label>
            <input type="number" name="konfirmasi_sembuh" class="form-control" placeholder="" required />

        </div>
        <div class="form-group">
            <label>Konfirmasi (Meninggal)</label>
            <input type="number" name="konfirmasi_meninggal" class="form-control" placeholder="" required />

        </div>
        
      

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>

</html>