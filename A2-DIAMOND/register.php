<?php 

// include('conf/koneksi.php');

// if (isset($_POST['register'])) {
// 	# code...
// 	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
// 	$username = $_POST['username'];
// 	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
// 	$password_v = $_POST['password_v'];
// 	// if ('$email', '$username', '$password') {
// 	// 	# code...
// 	// 	header('location:login.php');
// 	// }

	

// 	$sql = $koneksi->query("INSERT INTO user (email, username, password) VALUES (:email, :username, :password)");
// 	// $stmt = $db->prepare($sql);

// 	$parameter = array(
// 		':email' => $email,
// 		':username' => $username,
// 		':password' => $password );

// 	// $save = $stmt->execute($parameter);

// 	if ($parameter) {
// 		# code...
// 		echo "<script>alert('data berhasil disimpan!');
// 		window.location='login.php'</script>";
// 	}

// 	if ($password != $password_v) {
// 		# code...
// 		echo"<script>alert('data berhasil disimpan!')</script>";
// 	}

session_start();
if (isset($_SESSION['email'])) {
	# code...
	header('location:login.php');
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>REGISTER page</title>

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="project2/style2.css">
</head>
<body>

<div>
	<nav>
		<div class="logo">
			<h3><b>StudyRAR</b></h3>	
		</div>

		<ul>
			<li><a href="login.php">Login</a></li>
			<li><a href="register.php">Register</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href=""></a></li>
		</ul>

		<div class="menu-toggle">
			<input type="checkbox">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</nav>
</div>

<div id="wrap">

<section>
	<form method="POST" id="login-form" name="theForm" action="daftar.php" onsubmit="return validateForm()" >
		<div class="judul">
			<h1 id="title">StudyRAR</h1>
			<p id="deskripsi">REGISTER</p>
		</div>
		<div class="grup-form">
			<label id="email-l">EMAIL</label>
			<input type="email" name="email" id="email" class="control-form" placeholder="enter your email" required />
		</div>
		<div class="grup-form">
			<label id="user-l">USERNAME</label>
			<input type="username" name="username" id="username" class="control-form" placeholder="enter your username" required />
		</div>
		<div class="grup-form">
			<label id="password-l">PASSWORD</label>
			<input type="password" name="password" id="password" class="control-form" placeholder="enter your password" required />
		</div>
		<div class="grup-form">
			<label id="password-l">PASSWORD VERIFICATION</label>
			<input type="password" name="password_v" id="password" class="control-form" placeholder="enter your password verification" required />
		</div>
		<div class="grup-form">
			<a href="login.php"><button type="submit" name="register" value="Submit" id="submit" class="submit-button">DONE</button></a>
		</div>
	</form>
</section>

</div>

<script type="text/javascript" src="project2/script2.js"></script>

</body>
</html>