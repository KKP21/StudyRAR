<?php 


include 'conf/koneksi.php';

if (isset($_GET['login'])) {
	# code...
	if ($_GET['login'] == "gagal") {
		# code...
		echo "email atau password salah!";
	}
	elseif ($_GET['login'] == "logout") {
		# code...
		echo "anda berhasil logout!";
	}
	elseif ($_GET['login']) {
		# code...
		echo "anda harus login";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Login page</title>

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="project1/style.css">

</head>
<body>

	<div class="container">
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

	<div class="fullscreen-video-warp">
		<video src="project1/video1.mp4" autoplay loop ="true"></video>
	</div>



<div id="wrap">
	<!-- <header>
		<div class="brand">
			<p>StudyRAR</p>
		</div>

		<nav>
			<ul>
				<li><a href=""> HOME </a></li>
				<li><a href=""> PROFILE </a></li>
				<li><a href=""> ABOUT </a></li>
				<li><a href=""> SETTING </a></li>
				<li><a href=""> LOGIN </a></li>
			</ul>
		</nav>
	</header> -->

<section>
	<form method="POST" action="masuk.php" id="login-form" name="theForm" onsubmit="return validateForm()" method="post">
		<div class="judul">
			<h1 id="title">StudyRAR</h1>
			<p id="deskripsi">if you can dream, you can do it!</p>
		</div>
		<div class="grup-form">
			<label id="email-l">EMAIL</label>
			<input type="email" name="email" id="email" class="control-form" placeholder="enter your email" required />
		</div>
		<div class="grup-form">
			<label id="password-l">PASSWORD</label>
			<input type="password" name="password" id="password" class="control-form" placeholder="enter your password" required />
		</div>
		<div class="grup-form">
			<a href="beranda.php"><button name = "login" type="submit" id="submit" class="submit-button">LOGIN</button></a>
		</div>
		<div>
			<p class="paragraf">Klik <a href="register.php" id="anchor" class="anchor">register</a> jika belum memiliki akun!</p>
		</div>
	</form>
</section>

</div>
</div>
<script src="project1/script.js"></script>

</body>
</html>