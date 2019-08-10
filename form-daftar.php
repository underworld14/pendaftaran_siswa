<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pendaftaran Santri</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="css/jquery.js"></script>
    <script src="css/bootstrap.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Form Pendaftaran</h1>
    <h2>Pondok Pesantren Madinatunnajah</h2>

    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
            <div class="form-group">
                <label for="nama"> Nama </label> <br>
                <input type="text" name="nama" id="nama"> <br>
            </div>
            <div class="form-group">
                <label for="alamat"> Alamat </label> <br>
                <textarea name="alamat" id="alamat" rows="4"></textarea> <br>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="jenis_kelamin"> Jenis Kelamin </label> <br>
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki"> Laki Laki </label> <br>
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan"> Perempuan </label> <br>
            </div>
            <div class="form-group">
                </select> <br>
                <label for="agama"> Agama </label> <br>
                <select name="agama" id="agama" class="form-control">
                    <option value="Islam"> Islam </option>
                    <option value="Kristen"> Kristen </option>
                    <option value="Katolik"> Katolik </option>
                </select> <br>
            </div>
            <div class="form-group">
                <label for="sekolah_asal"> Sekolah Asal </label> <br>
                <input type="text" name="sekolah_asal" id="sekolah_asal"> <br> <br>
            </div>

            <input class="btn btn-success" type="submit" value="DAFTAR" name="daftar">
        </fieldset>
    </form>
    
</body>
</html>