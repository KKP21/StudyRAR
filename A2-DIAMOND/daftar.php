<?php 

include 'conf/koneksi.php';

	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$username = isset($_POST['username']);
	//$password = password_hash(isset($_POST['password']), PASSWORD_DEFAULT);
	$password = isset($_POST['password']);
	$password_v = isset($_POST['password_v']);

	$sql = "SELECT * FROM user WHERE email = '$email'";
	$query = $koneksi->query($sql);
	if ($query->num_rows != 0) {
		# code...
		echo "<script>alert('email sudah terdaftar!');
		window.location='login.php'</script>";
		// echo "<script>alert('username sudah terdaftar!'); </script>";
		// header('location:login.php');
	}else{
		if ($password_v != $password) {
			# code...
			echo "<script>alert('data tidak sesuai!');
			window.location='register.php'</script>";
			// echo "<script>alert('data belum tepat!')</script>";
			// header('location:register.php');
		}else{
			$data = "INSERT INTO user VALUES (NULL, '$email', '$username', '$password')";
			$simpan = $koneksi->query($data);
			if ($simpan) {
				# code...
				echo "<script>alert('data berhasil disimpan!');
				window.location='login.php'</script>";
				// echo "<script>alert('pendaftaran berhasil!'); </script>";
				// header('location:login.php');
			}else {
				echo "<script>alert('data gagal disimpan!');
				window.location='register.php'</script>";
			}
		}
	}

 ?>