<?php

include("config.php");

// cek apakah tombol sudah dicek apa belum 
if(isset($_POST['daftar'])) {

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // membuat querry
    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah' )";
    $query = mysqli_query($db, $sql);

    // apakakh query berhasil disimpan ??
    if ($query) {
        // kalau berhasil arahkan ke halaman indeks php dengan status=sukses
        header('location: index.php?status=sukses');
    } else {
        // kalau gagal arahkan ke halaman indeks php dengan status=gagal
        header('location: index.php?status=gagal');
    }

} else {
    die("Akses Dilarang... !");
}

?>

