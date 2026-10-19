<?php
include "koneksi.php";

$kode = $_GET['kode'];
$query = mysqli_query($koneksi,"DELETE FROM guru WHERE kode='$kode'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=dataguru'>";
	} else {
		echo "<script>alert('Data anda gagal dihapus. Ulangi sekali lagi');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=dataguru'>";
	}
?>
