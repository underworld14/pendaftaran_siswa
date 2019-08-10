<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Santri Madinatunnajah | Ciputat</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="css/jquery.js"></script>
    <script src="css/bootstrap.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h2>Pendaftaran Santri Baru</h2>
        <h1>Pondok Pesantren Madinatunnajah</h1>
    </header>    

    <nav>
       <ul>
           <li><a href="form-daftar.php">Form Pendaftaran</a></li>
           <li><a href="list-siswa.php">List Pendaftar</a></li>
       </ul> 
    </nav>

    <?php if(isset($_GET['status'])): ?>
        <p>
            <?php if ($_GET['status'] == 'sukses') {
                echo "Pendaftaran Siswa Baru Berhasil";
            } else {
               echo "Pendaftaran Siswa Baru Gagal";
            }
            ?>
        </p>
    <?php endif; ?>

</body>
</html>