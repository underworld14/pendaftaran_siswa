<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Pendaftar Santri Baru</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="css/jquery.js"></script>
    <script src="css/bootstrap.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Daftar Santri yang Sudah Mendaftar</h1>
    </header>
    
    <nav>
        <a class="btn btn-primary" href="form-daftar.php">[+] Tambah Baru </a>
    </nav>
    <br>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php  
            $sql ="SELECT * FROM calon_siswa";
            $query = mysqli_query($db, $sql);
            
            $nomor = 0;
            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";
                $nomor++;
                    echo "<td>". $nomor . "</td>";
                    echo "<td>". $siswa['nama'] . "</td>";
                    echo "<td>". $siswa['alamat'] . "</td>";
                    echo "<td>". $siswa['jenis_kelamin'] . "</td>";
                    echo "<td>". $siswa['agama'] . "</td>";
                    echo "<td>". $siswa['sekolah_asal'] . "</td>";

                    echo "<td>";
                        echo "<a class='badge badge-warning' href='form-edit.php?id=" . $siswa['id'] . "'> Edit </div> </a>";
                        echo "<a class='badge badge-danger' href='hapus.php?id=" . $siswa['id'] . "'> Hapus </a>"; 
                    echo "</td>";

                echo "</tr>";  
            
            } 
            ?>
        </tbody>
    </table>

    <p>Total Pendaftar : <?php echo mysqli_num_rows($query); ?> </p>
</body>
</html>

