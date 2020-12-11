<?php 
 
require 'function3.php';
$soal = query("SELECT * FROM soal");
$judul = query("SELECT * FROM judul")



 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	
</head>
<body>
		<!--nav-->
		

	<!--isi-->
	<nav>
		<div class="logo">
			<h3><b>StudyRAR</b></h3>	
		</div>

		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Profil</a></li>
			<li><a href="">About</a></li>
			<li><a href="">Settings</a></li>
		</ul>

		<div class="menu-toggle">
			<input type="checkbox">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</nav>

	<div id="tampilan">

				<button id="btn" >
					<a href="tambahsoal.php" style="color: #000000; text-decoration: none;">Creat Soal</a>
				</button>
				<!-- <br><br> -->

				

			<div id="question">

                <select id="mapel" name="mapel">
                		<option value="biologi">Biologi</option>
                		<option value="fisika">Fisika</option>
                        <option value="kimia">Kimia</option>
                        <option value="ekonomi">Ekonomi</option>
                        <option value="sejarah">Sejarah</option>
                        <option value="sosiologi">Sosiologi</option>
                        <option value="matematika">Matematika</option>
                        <option value="bindo">Bahasa Indonesia</option>
                        <option value="bing">Bahasa Ingris</option>
                        <option value="agama">Agama</option>
                </select>
					
				</table>

				<table border="1"  cellspacing="0">
						<tr>
							<th>No.</th>
							<th>Soal</th>
							<th>Kunci</th>
							<th>Aksi</th>
						</tr>
					<?php $i = 1; ?>
						<?php foreach ( $soal as $row) : ?>
						<tr>
							<td><?= $i; ?></td>
							<td>
							<?= $row["pertanyaan"] ?>
							</td><br>
							<td>
								<?= $row["kunci"]; ?>
							</td><br>
							<td>
								
								<a href="hapus.php?id=<?= $row["nomor"]; ?>" style="color: black;">hapus</a>
							</td>
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
				</table>	
			</div>

	</div>


	<script src="script.js"></script>


</body>
</html>