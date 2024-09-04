<?php
	
	include "koneksi.php";
	include "fungsi_antiinjection.php";
	include "fungsi_waktu.php";

	$id = antiinjection($_POST['id_user']);
	$suspek_dirawat = antiinjection($_POST['suspek_dirawat']);
	$suspek_meninggal = antiinjection($_POST['suspek_meninggal']);
	$konfirmasi_dirawat = antiinjection($_POST['konfirmasi_dirawat']);
	$konfirmasi_sembuh = antiinjection($_POST['konfirmasi_sembuh']);
	$konfirmasi_meninggal = antiinjection($_POST['konfirmasi_meninggal']);
	$status = antiinjection($_POST['status']);
 
	if ($_GET['mod']=='tambah') {
		$sql = $connect->query("INSERT INTO t_infocvd (suspek_dirawat, suspek_meninggal, konfirmasi_dirawat, konfirmasi_sembuh, konfirmasi_meninggal, status, created_date) 
		VALUES ('$suspek_dirawat', '$suspek_meninggal', '$konfirmasi_dirawat', '$konfirmasi_sembuh', '$konfirmasi_meninggal', '$status', '$datetime') ");
			header('location:index.php?code=1');
	}

	elseif ($_GET['mod']=='edit') {
		$sql = $connect->query("UPDATE t_infocvd SET suspek_dirawat='$suspek_dirawat', suspek_meninggal='$suspek_meninggal', konfirmasi_dirawat='$konfirmasi_dirawat', konfirmasi_sembuh='$konfirmasi_sembuh', konfirmasi_meninggal='$konfirmasi_meninggal', status='$status', modified_date='$datetime' 
			WHERE id_user ='$id' ");
		header('location:index.php?code=2');
	}

	$id = $_GET['id'];
	if($_GET['mod']=='delete') {
			$sql1 = $connect->query("DELETE FROM t_infocvd WHERE id_user ='$id' ");
			header('location:index.php?code=3');
	}

?>