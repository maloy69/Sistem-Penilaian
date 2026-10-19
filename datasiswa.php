<h3>DATA  SISWA</h3>
<form action="?page=carisiswa" method="post">
<table style="border:3px solid darkorange;">
<tr>
	<td><a href="?page=inputsiswa">Input Data Siswa</a></td>
	<td><input type="text" name="txtcari" size="40" placeholder="Masukan nama lengkap atau NIS"></td>
	<td><input type="submit" name="cari" value="Cari Siswa"></td>
</tr>
</table>
</form>

<hr />
<table width="100%" align="center" cellspacing="0" cellpadding="3">
<thead align="center" bgcolor="#FFCC00">
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
	$query = mysqli_query($koneksi,"SELECT * FROM siswa_1 ORDER BY nis");
	$total = mysqli_num_rows($query);
	$no = 1;
	while ($data=mysqli_fetch_array($query)) {
?>

<tbody>
<tr>
	<td align="center"><?php echo $no; ?></td>
	<td><?php echo $data['Nama']; ?></td>
	<td><?php echo $data['tempat_lahir']; ?></td>
	<td><?php echo ($data['tanggal_lahir'] != '0000-00-00' ? $data['tanggal_lahir'] : '-'); ?></td>
	<td><?php echo $data['jenis_kelamin']; ?></td>
	<td><?php echo $data['agama']; ?></td>
	<td align="center">
		<a href="?page=ubahsiswa&nis=<?php echo $data['nis']; ?>">edit</a>
	</td>
	<td align="center">
	<a href="?page=hapussiswa&nis=<?php echo $data['nis']; ?>" onclick="return confirm('Anda yakin ingin menghapus data <?php echo $data['Nama']; ?> ?')">hapus</a>
	</td>                
</tr>

<?php $no++; } ?>

</tbody>
</table>

<table width="100%" cellpadding="3">
<tr bgcolor="#FFCC00">
	<td>Jumlah : <?php echo $total; ?> Data</td>
</tr>
</table>
