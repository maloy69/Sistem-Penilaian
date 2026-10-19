<h3>DATA SISWA</h3>
<form action="?page=carisiswa" method="post">
<table>
<tr>
	<td><a href="?page=inputsiswa">Input Data Siswa | </a></td>
	<td><input type="text" name="txtcari" size="40" placeholder="Masukan NIS atau Nama Siswa"></td>
	<td><input type="submit" name="cari" value="Cari Siswa"></td>
</tr>
</table>
</form>

<hr />
<table width="100%" align="center" cellspacing="0" cellpadding="3">
<thead align="center" bgcolor="orange">
<tr>
	<th>NO</th>
	<th>NIS</th>
	<th>NAMA</th>
	<th>TEMPAT - TANGGAL LAHIR</th>
	<th>JENIS KELAMIN</th>
	<th>AGAMA</th>
	<th>EDIT</th>
	<th>HAPUS</th>
</tr>
</thead>

<?php
	include "koneksi.php";

	if(isset($_POST['cari'])){
		$txtcari = $_POST['txtcari'];

		$query = mysqli_query($koneksi,"SELECT * FROM siswa_1 WHERE Nama LIKE '%".$txtcari."%' OR nis LIKE '%".$txtcari."%'");
		$total = mysqli_num_rows($query);
		$no = 1;
		while ($data=mysqli_fetch_array($query)) {
?>

<tbody>
<tr>
	<td align="center"><?php echo $no; ?></td>
	<td align="center"><?php echo $data['nis']; ?></td>
	<td><?php echo $data['Nama']; ?></td>
	<td><?php echo $data['tempat_lahir']; ?></td>
	<td><?php echo $data['tanggal_lahir']; ?></td>
	<td><?php echo $data['jenis_kelamin']; ?></td>
	<td><?php echo $data['agama']; ?></td>
	<td align="center">
		<a href="?page=ubahsiswa&nis=<?php echo $data['nis']; ?>">edit</a>
	</td>
	<td align="center">
	<a href="?page=hapussiswa&nis=<?php echo $data['nis']; ?>" onclick="return confirm('Anda yakin ingin menghapus data <?php echo $data['Nama']; ?> ?')">hapus</a>
	</td>                
</tr>

<?php $no++; }} ?>

</tbody>
</table>

<table cellpadding="4">
<tr>
	<td>Jumlah : <?php echo $total; ?> Siswa</td>
</tr>
</table>