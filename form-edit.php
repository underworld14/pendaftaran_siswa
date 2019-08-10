<?php
include("config.php");

// Kalau tidak ada di query string.... 
if(!isset($_GET['id'])) {
    header('location: list-siswa.php');
}

// ambil id dari query setting
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang akan diedtit tidak ditemukan
if(mysqli_num_rows($query) < 1) {
    die('data tidak ditemukan....');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit Data</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="css/jquery.js"></script>
    <script src="css/bootstrap.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Form Edit Data </h1>
    <form action="proses-edit.php" method="POST">

    <fieldset>
        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>"/>
        </div>
        <div class="form-group">
            <label for="nama"> NAMA </label> <br>   
            <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>"/>
        </div>
        <div class="form-group">
            <label for="alamat"> ALAMAT </label> <br>
            <textarea name="alamat"> <?php echo $siswa['alamat'] ?> </textarea>
        </div>
        <div class="form-check">
            <label for="jenis_kelamin"> Jenis Kelamin </label> <br>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <label for="jenis_kelamin"><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?> /> laki-laki </label>
            <label for="jenis_kelamin"><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?> /> perempuan </label>
        </div>
        <div class="form-group">
            <label for="agama"> Agama </label>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama" class="form-control-sm">
                <option <?php  echo ($agama == 'Islam') ? "selected" : "" ?>> Islam </option>
                <option <?php  echo ($agama == 'Kristen') ? "selected" : "" ?>> Kristen </option>
                <option <?php  echo ($agama == 'Katolik') ? "selected" : "" ?>> Katolik </option>
            </select>
        </div>
        <div class="form-group">
            <label for="sekolah_asal"> Sekolah Asal </label> <br>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
        </div>

        <div >
            <input type="submit" value="SIMPAN" name="simpan" class="btn btn-primary"/>
        </div>

    </fieldset>
    

    </form>
</body>
</html>