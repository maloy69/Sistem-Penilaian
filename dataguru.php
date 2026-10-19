<h3>DATA GURU</h3>
<form action="?page=cariguru" method="post">
<table>
<tr>
	<td><a href="?page=inputguru">Input Data Guru | </a></td>
	<td><input type="text" name="txtcari" size="40" placeholder="Masukan Kode atau Nama Guru"></td>
	<td><input type="submit" name="cari" value="Cari Guru"></td>
</tr>
</table>
</form>

<hr />
<table width="100%" align="center" cellspacing="0" cellpadding="2">
<thead align="center" bgcolor="orange">
<tr>
	<th>NO</th>
	<th>KODE</th>
	<th>NAMA</th>
	<th>MATA PELAJARAN</th>
	<th>JK</th>
	<th>T T L</th>
	<th>ALAMAT</th>
	<th>EDIT</th>
	<th>HAPUS</th>
</tr>
</thead>

<?php
	include "koneksi.php";
	$query = mysqli_query($koneksi,"SELECT * FROM guru ORDER BY kode");
	$total = mysqli_num_rows($query);
	$no = 1;
	while ($data=mysqli_fetch_array($query)) {
?>

<tbody>
<tr>
	<td align="center"><?php echo $no; ?></td>
	<td><?php echo $data['kode']; ?></td>
	<td><?php echo $data['nama']; ?></td>
	<td><?php echo $data['mapel']; ?></td>
	<td><?php echo $data['jk']; ?></td>
	<td>
		<?php echo $data['tmpt_lhr']; ?> - <?php echo $data['tgl_lhr']; ?>
    </td>
	<td><?php echo $data['alamat']; ?></td>
	<td align="center">
		<a href="?page=ubahguru&kode=<?php echo $data['kode']; ?>">edit</a>
	</td>
	<td align="center">
	<a href="?page=hapusguru&kode=<?php echo $data['kode']; ?>" onclick="return confirm('Anda yakin ingin menghapus data <?php echo $data['nama']; ?> ?')">hapus</a>
	</td>                
</tr>

<?php $no++; } ?>

</tbody>
</table>

<table cellpadding="4">
<tr>
	<td>Jumlah : <?php echo $total; ?> Guru</td>
</tr>
</table>
