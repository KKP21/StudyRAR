<?php


session_start();

include 'conf/koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$data = $koneksi->query("SELECT * FROM user WHERE email='$email' AND password='$password'");

$cek = mysqli_num_rows($data);

if ($cek > 0) {
	# code...
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login" ;
	header("location:beranda.php");
}
else{
	header("location:login.php?login=gagal");
}

 ?>