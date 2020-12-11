<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>StudyRAR -homepage-</title>

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Home/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


	<nav>
		<div class="logo">
			<h3><b>StudyRAR.</b></h3>	
		</div>

		<ul>
			<li><a href="beranda.php">Home</a></li>
			<li><a href="profil.php">Profil</a></li>
			<li><a href="about2.php">About</a></li>
			<li><a href="baru.php">Settings</a></li>
			<li><a href="keluar.php">Logout</a></li>
		</ul>

		<div class="menu-toggle">
			<input type="checkbox">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</nav>

	<!-- Slide -->

	<div id="slider">
		<figure>
		<img src="img\home1.jpg" alt="1" style="width: 20%; height: 600px;">
		<img src="img\home2.jpg" alt="1" style="width: 20%; height: 600px;">
		<img src="img\home3.jpg" alt="1" style="width: 20%; height: 600px;">
	</figure>
</div>

<!-- Search -->
<nav class="pencarian">
	<input type="text" name="" placeholder="Looking for question..">
</nav>
<!-- Icon -->
<div class="ikon">
<div class="pensil">
	<a href="indeks.php"><img src="img\create.png" alt="1" style="width: 9.2%; height: 100px;">
	<p>Create your question here!</p></a>
</div>

<br><br>

<div class="orang">
	<a href="myactivity.php"><img src="img\act.png" alt="1" style="width: 12%; height: 113px;">
	<p>My activity</p></a>
	<p>Hmm.. How many question did i work on?</p>
</div>

<br><br>

<div class="jam">
	<a href="history.php"><img src="img\history.png" alt="1" style="width: 20%; height: 110px;">
	<p>History</p></a>
	<p>Let's see the questions that have been made</p>
</div>
</div>


<div class="deskripsi">

</div>

<div id="kotak">
	<ul>
	<li><h6>Pengembangan Aplikasi Berbasis Web</h6></li>
	<br>
	<li><h6>Informatika || Fakultas Teknologi Industri</h6></li>
	<br>
	<li><h6>Universitas Islam Indonesia Jl. Kaliurang No.Km. 14,5, Krawitan, Umbulmartani, Kec. Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584</h6></li>
</ul>
</div>

<script src="Home/script.js"></script>

</body>
</html>