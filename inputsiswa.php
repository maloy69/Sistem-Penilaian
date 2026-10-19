<h3>INPUT DATA SISWA</h3>
<form method="post" action="">
    <table border="0" cellpadding="4" cellspacing="4">
        <tr>
            <td>NIS</td>
            <td><input type="text" name="nis" size="10" placeholder="Isikan NIS"></td>
        </tr>
        <tr>
            <td>NAMA LENGKAP</td>
            <td><input type="text" name="nama_lengkap" size="50" placeholder="Isikan Nama Lengkap"></td>
        </tr>
        <tr>
            <td>TEMPAT LAHIR</td>
            <td><input type="text" name="tempat_lahir" size="50" placeholder="Isikan Tempat Lahir"></td>
        </tr>
        <tr>
            <td>TANGGAL LAHIR</td>
            <td><input type="date" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki 
                <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
            </td>
        </tr>
        <tr>
            <td>AGAMA</td>
            <td>
                <select name="agama">
                    <option value="-">--Pilih--</option>
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
    $nama     = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir  = $_POST['taggal_lahir'];
    $jenis_kelamin       = $_POST['jenis_kelamin'];
    $agama    = $_POST['agama'];
    
    $input = mysqli_query($koneksi,"INSERT INTO siswa_1 VALUES('$nis','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama')");

    if ($input) {
        echo "<script> alert('Data berhasil Ditambahkan'); </script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=datasiswa'>";
    }else {
        echo "<script> alert('Data Gagal Ditambahkan'); </script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=inputsiswa'>";
    }
}
?>