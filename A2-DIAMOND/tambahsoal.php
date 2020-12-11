<?php 

require 'function3.php';

// cek //
if ( isset($_POST["submit"]) ) {

	if( tambah($_POST) > 0) {
		echo "
			<script>
				alert('Berhasil disimpan!');
				document.location.href = 'indeks.php';
			</script>

		";
	} else {
		echo "
			<script>
				alert('Gagal!');
				document.location.href = 'indeks.php';
			</script>

		";
	}


	



}


 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Creat Soal</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style3.css">
</head>
<body>

		<!--navbar-->
		<nav>
		<div class="logo">
			<h3><b>StudyRAR</b></h3>	
		</div>

		<ul>
			<li><a href="beranda.php">Home</a></li>
			<li><a href="">Profil</a></li>
			<li><a href="about2.php">About</a></li>
			<li><a href="baru.php">Settings</a></li>
		</ul>

		<div class="menu-toggle">
			<input type="checkbox">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</nav>

	<!-- isi -->
			<div id="tampilan">
				<br><br><br><br>
		<h2>Creat</h2><br>

		<form action="" method="post" id="main">
				<div class="form-soal" id="sooaall">
					<ul>
						
						<li>
							<label for="pertanyaan">Masukkan Soal</label><br>
							<textarea type="text" name="pertanyaan" id="pertanyaan"></textarea>
						</li>
						<li>
							<label for="kunci">Masukkan Kunci</label><br>
							<textarea type="text" name="kunci" id="kunci"></textarea>
						</li><br><br>
						<li>
							<button type="submit" name="submit" id="bttn">Save</button>
						</li>
					</ul>

				</div>
		</form>		
	</div>
	


	<script src="script.js"></script>


</body>
</html>