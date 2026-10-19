<h3>INPUT DATA GURU</h3>
<form method="post" action="">
	<table border="0" cellpadding="4" cellspacing="4">
		<tr>
			<td>K O D E</td>
			<td><input type="text" name="kode" size="10" placeholder="Isikan Kode"></td>
		</tr>
		<tr>
			<td>NAMA GURU</td>
			<td><input type="text" name="nama" size="40" placeholder="Isikan Nama Lengkap"></td>
		</tr>
		<tr>
			<td>MATA PELAJARAN</td>
			<td><input type="text" name="mapel" size="50" placeholder="Isikan Mata Pelajaran"></td>
		</tr>
		<tr>
			<td>JENIS KELAMIN</td>
			<td>
				<input type="radio" name="jk" value="L">Laki-Laki 
				<input type="radio" name="jk" value="P">Perempuan
			</td>
		</tr>
		<tr>
			<td>TEMPAT LAHIR</td>
			<td><input type="text" name="tmpt_lhr" size="20" placeholder="Isikan Tempat Lahir"></td>
		</tr>
		<tr>
			<td>TANGGAL LAHIR</td>
			<td><input type="date" name="tgl_lhr"></td>
		</tr>
		<tr>
			<td valign="top">ALAMAT</td>
			<td><textarea name="alamat" cols="60" rows="4"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<hr>
				<input type="submit" name="simpan" value="S I M P A N">
			</td>
		</tr>
	</table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['simpan'])){
	$kode     = $_POST['kode'];
	$nama     = $_POST['nama'];
	$mapel    = $_POST['mapel'];
	$jk       = $_POST['jk'];
	$tmpt_lhr = $_POST['tmpt_lhr'];
	$tgl_lhr  = $_POST['tgl_lhr'];
	$alamat   = $_POST['alamat'];
	
	$input = mysqli_query($koneksi,"INSERT INTO guru VALUES('$kode','$nama','$mapel','$jk','$tgl_lhr','$tmpt_lhr','$alamat')");

 	if ($input) {
		echo "<script> alert('Data berhasil Ditambahkan'); </script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=dataguru'>";
	}else {
		echo "<script> alert('Data Gagal Ditambahkan'); </script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=inputguru'>";
	}
}
?>