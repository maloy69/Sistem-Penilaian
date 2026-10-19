<?php
include "koneksi.php";
$nis = $_GET['nis'];

$query = mysqli_query($koneksi,"SELECT * FROM siswa_1 WHERE nis='$nis'");
$data = mysqli_fetch_array($query);

$nis = $data['nis'];
$Nama = $data['Nama'];
$tempat_lahir = $data['tempat_lahir'];
$tanggal_lahir = $data['tanggal_lahir'];
$jenis_kelamin = $data['jenis_kelamin'];
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
            <td><input type="text" name="Nama" size="50" value="<?php echo $nama; ?>"></td>
        </tr>
        <tr>
            <td>TEMPAT LAHIR</td>
            <td><input type="text" name="tempat_lahir" size="50" value="<?php echo $tempat_lahir; ?>"></td>
        </tr>
        <tr>
            <td>TANGGAL LAHIR</td>
            <td><input type="date" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>"></td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="Laki-Laki" 
                <?php if($jenis_kelamin=='Laki-Laki') echo 'checked'?>>Laki-Laki 
                <input type="radio" name="jenis_kelamin" value="Perempuan" 
                <?php if($jenis_kelamin=='Perempuan') echo 'checked'?>>Perempuan
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
    $Nama     = $_POST['Nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $jenis_kelamin       = $_POST['jenis_kelamin'];
    $agama    = $_POST['agama'];

    $edit = mysqli_query($koneksi,"UPDATE siswa_1 SET nis = '$nis', Nama = '$Nama', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', agama = '$agama' WHERE nis='$nis'");


    if ($edit) {
        echo "<script> alert('Data berhasil di ubah'); </script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=datasiswa'>";
    }else {
        echo "<script> alert('Data gagal di ubah'); </script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=ubahsiswa&nis=$nis'>";
    }
}
?>