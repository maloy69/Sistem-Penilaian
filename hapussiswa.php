<?php
include "koneksi.php";

$nis = $_GET['nis'];
$query = mysqli_query($koneksi,"DELETE FROM siswa_1 WHERE nis='$nis'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=datasiswa'>";
	} else {
		echo "<script>alert('Data anda gagal dihapus. Ulangi sekali lagi');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=datasiswa'>";
	}
?>
