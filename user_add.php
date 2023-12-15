<?php
//session_start();
include 'config.php';

include 'authcheck.php';

$role = mysqli_query($dbconnect, "SELECT * FROM role");

//echo var_dump($roledata);
//return false;

if (isset($_POST['Simpan'])) {
    //echo var_dump($_POST);
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role_id = $_POST['role_id'];

    // Menyimpan ke database;
    mysqli_query($dbconnect, "INSERT INTO user VALUES ('','$nama','$username','$password', '$role_id')");

    $_SESSION['success'] = 'Berhasil Menambahkan Data';

    // Mengalihkan halamn ke list barang
    header("location:user.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <h1>Tambah User</h1>
        <form method="post">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama User">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Role Akses</label>
                <select class="form-control" name="role_id">
                    <option value="">Pilih Role Akses</option>
                    <?php while ($row = mysqli_fetch_array($role)) { ?>
                        <option value="<?= $row['id_role'] ?>"><?= $row['nama'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" name="Simpan" class="btn btn-primary">
            <a href="/kasirv1/user.php" class="btn btn-warning">Kembali</a>
        </form>
    </div>
</body>

</html>