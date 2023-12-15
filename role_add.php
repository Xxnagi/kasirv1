<?php
// session_start(); 
include 'config.php';
include 'authcheck.php';

if (isset($_POST['Simpan'])) {
    //echo var_dump($_POST);
    $nama = $_POST['nama'];

    // Menyimpan ke database;
    mysqli_query($dbconnect, "INSERT INTO role VALUES ('','$nama')");

    $_SESSION['success'] = 'Berhasil Menambahkan Data';

    // Mengalihkan halamn ke list barang
    header("location:role.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Role</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <h1>Tambah Role</h1>
        <form method="post">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Role">
            </div>
            <input type="submit" name="Simpan" class="btn btn-primary">
            <a href="/kasirv1/role.php" class="btn btn-warning">Kembali</a>
        </form>
    </div>
</body>

</html>