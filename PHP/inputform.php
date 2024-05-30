<?php
require_once('koneksidb.php');

if (isset($_POST['btnsimpan'])) {
    $Nama = trim($_POST['Nama']);
    $Alamat = trim($_POST['Alamat']);
    $Telp = trim($_POST['Telp']);
    $Email = trim($_POST['Email']);

    $query_sql = "INSERT INTO tb_member (Nama, Alamat, Telp, Email)
                  VALUES ('$Nama', '$Alamat', '$Telp', '$Email');";
    $sql = mysqli_query($koneksidb, $query_sql) or die(mysqli_error($koneksidb));
    if ($sql) {
        echo "<script>alert('Berhasil simpan Registrasi.');</script>";
        echo "<script>window.location.href='koneksidb.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan Boostrap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <form method="post" name="form1">
        <div class="col-md-12">
            <div class="form-group">
                <div class="form-group">
                    <label for="Nama">Nama: </label>
                    <input type="text" required name="Nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat: </label>
                    <input type="Alamat" required name="Alamat" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Telp">Telp: </label>
                    <input type="number" required name="Telp" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Email">Email:</label>
                    <input type="email" required name="Email" class="form-control">
                </div>
                <div class="form-check mb-12">
                    <button class="btn btn-success" name="btnsimpan" value="btnsimpan" type="submit"> Simpan
                        <i class="ace-icon fa fa-signal"></i>
                    </button>
                    <button class="btn btn-danger" type="button"> Reset
                        <i class="ace-icon fa fa-signal"></i>
                    </button>
                    <a href="dataregistrasi.php"> <button class="btn btn-primary" type="button"> Data Registrasi
                            <i class="ace-icon fa fa-signal"></i>
                        </button></a>
                </div>
            </div>
    </form>
</body>

</html>