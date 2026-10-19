<?php
include "koneksi.php";
$nis = $_GET['nis'];

$query = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis='$nis'");
$data = mysqli_fetch_array($query);

$nis = $data['nis'];
$nama = $data['nama'];
$tmpt_lhr = $data['tmpt_lhr'];
$tgl_lhr = $data['tgl_lhr'];
$jk = $data['jk'];
$agama = $data['agama'];
?>

<h3>EDIT DATA SISWA</h3>
<form method="post" action="">
	<table border="1" cellpadding="4" cellspacing="2">
		<tr>
			<td>NIS</td>
			<td><input type="text" name="nis" size="10" value="<?php echo $nis; ?>" readonly></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="nama" size="50" value="<?php echo $nama; ?>"></td>
		</tr>
		<tr>
			<td>TEMPAT LAHIR</td>
			<td><input type="text" name="tmpt_lhr" size="50" value="<?php echo $tmpt_lhr; ?>"></td>
		</tr>
		<tr>
			<td>TANGGAL LAHIR</td>
			<td><input type="date" name="tgl_lhr" value="<?php echo $tgl_lhr; ?>"></td>
		</tr>
		<tr>
			<td>JENIS KELAMIN</td>
			<td>
				<input type="radio" name="jk" value="Laki-Laki" 
				<?php if($jk=='Laki-Laki') echo 'checked'?>>Laki-Laki 
				<input type="radio" name="jk" value="Perempuan" 
				<?php if($jk=='Perempuan') echo 'checked'?>>Perempuan
			</td>
		</tr>
		<tr>
			<td>AGAMA</td>
			<td>
				<select name="agama">
					<option value="<?php echo $agama; ?>"><?php echo $agama; ?></option>
					<option value="Islam">Islam</option>
					<option value="Kristen">Kristen</option>
					<option value="Hindu">Hindu</option>
					<option value="Budha">Budha</option>
					<option value="Katolik">Katolik</option>
				</select>
			</td>
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
	$nis      = $_POST['nis'];
	$nama     = $_POST['nama'];
	$tmpt_lhr = $_POST['tmpt_lhr'];
	$tgl_lhr  = $_POST['tgl_lhr'];
	$jk       = $_POST['jk'];
	$agama    = $_POST['agama'];

	$edit = mysqli_query($koneksi,"UPDATE siswa SET nis = '$nis', nama = '$nama', tmpt_lhr = '$tmpt_lhr', tgl_lhr = '$tgl_lhr', jk = '$jk', agama = '$agama' WHERE nis='$nis'");


 	if ($edit) {
		echo "<script> alert('Data berhasil di ubah'); </script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=datasiswa'>";
	}else {
		echo "<script> alert('Data gagal di ubah'); </script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=ubahsiswa&nis=$nis'>";
	}
}
?>