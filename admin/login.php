<?php
session_start(); 

include "koneksi.php"; 

$username = mysqli_real_escape_string($connect, $_POST['username']); 
$password = mysqli_real_escape_string($connect, $_POST['password']); 
$password = md5($password); 


$sql = mysqli_query($connect, "SELECT * FROM user WHERE username='".$username."' AND password='".$password."'");
$data = mysqli_fetch_array($sql); 


if( ! empty($data)){ 
	$_SESSION['username'] = $data['username']; 
	$_SESSION['nama'] = $data['nama']; 
	
	setcookie("message","delete",time()-1); 
	
	header("location: beranda.php"); 
}else{ 	
	setcookie("message", "Maaf, Username atau Password salah", time()+3600);
	header("location: index.php"); 
}
?>
