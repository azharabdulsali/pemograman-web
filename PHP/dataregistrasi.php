<?php
    require_once('koneksidb.php'); // Tidak ada spasi antara 'require' dan 'once'
    $query_sql = "SELECT * FROM tb_member"; // SELECT harus diikuti dengan *
    $sql = mysqli_query($koneksidb, $query_sql) or die(mysqli_error($koneksidb)); // mysqli_error harus diberikan parameter koneksi
    $totaldata = mysqli_num_rows($sql);
    $data = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Bootstrap</title> <!-- Salah ketik Boostrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> <!-- URL yang benar -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> <!-- URL yang benar -->
</head>

<body>
<br>
<div class="container">
<table class="table table-responsive table-striped table-bordered table-hover" id="dynamic-table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
    <?php
    if ($totaldata == 0) {
        echo '<tr><td colspan="4">Data kosong.</td></tr>';
    } else {
        do {
    ?>
        <tr>
            <td><?php echo $data['Nama']; ?></td> <!-- Memperbaiki 'Mama' menjadi 'Nama' -->
            <td><?php echo $data['Alamat']; ?></td>
            <td><?php echo $data['Telp']; ?></td>
            <td><?php echo $data['Email']; ?></td> <!-- Memperbaiki penggunaan tanda kutip -->
        </tr>
    <?php
        } while ($data = mysqli_fetch_assoc($sql)); // Memperbaiki sintaks while
    }
    ?>
    </tbody>
</table>
</div>
</body>
</html>