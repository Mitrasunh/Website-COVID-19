<?php
    include 'database_gambar.php';

    $id_gambar=$_GET["id_gambar"];
    $gambar=$_GET["gambar"];
    $sql="delete from petasebaran where id_gambar=$id_gambar";
    $hapus_bank=mysqli_query($kon,$sql);

    //Menghapus file gambar
    unlink("gambar/".$gambar);

    if ($hapus_bank) {
        header("Location:index.php?hapus=berhasil");
    }
    else {
        header("Location:index.php?hapus=gagal");

    }
?>