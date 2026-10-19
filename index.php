<!DOCTYPE html>
<html>
<head>
	<title>SMK MUTU PAGUYANGAN</title>
	<link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
<body>
	<div class="bungkus">
		<div class="atas">
			<center>		
			<h1>SISTEM INFORMASI PENDATAAN</h1>
			<p>SMK MUHAMMADIYAH PAGUYANGAN</p>
			</center>
		</div>
		<div class="badan">			
			<div class="menu">
				<ul>
					<li><a href="?page=home">Home</a></li>
					<li><a href="?page=datasiswa">Data Siswa</a></li>
					<li><a href="##">Data Guru</a></li>
					<li><a href="##">Mata Pelajaran</a></li>
					<li><a href="##">Logout</a></li>
				</ul>
			</div>
			<div class="isi">
				<p>
					<?php
					error_reporting(0);
					switch ($_GET['page']){
						default:
						include "home.php";
						break;

						case "datasiswa";
						include "datasiswa.php";
						break;
						case "inputsiswa";
						include "inputsiswa.php";
						break;
						case "carisiswa";
						include "carisiswa.php";
						break;
						case "hapussiswa";
						include "hapussiswa.php";
						break;
						case "ubahsiswa";
						include "editsiswa.php";
						break;
					}
					?>
				</p>
			</div>
		</div>
		<div class="kosong"></div>
		<div class="bawah">
			<center>CopyRight | @SMK Muhammadiyah Paguyangan</center>
		</div>
	</div>
</body>
</html>
