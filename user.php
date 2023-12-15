<?php
//session_start();
include 'config.php';



include 'authcheck.php';


$view = $dbconnect->query("SELECT u.*,r.nama as nama_role FROM user as u INNER JOIN role as r ON u.role_id=r.id_role");

?>

<!DOCTYPE html>
<html>

<head>
    <title>List User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container">

        <?php if (isset($_SESSION['success']) && $_SESSION['success'] != '') { ?>

            <div class="alert alert-success" role="alert">
                <?= $_SESSION['success'] ?>
            </div>
        <?php
        }
        $_SESSION['success'] = '';

        ?>

        <h1>List User</h1>
        <a href="/kasirv1/user_add.php" class="btn btn-primary">Tambah data</a>
        <table class="table table-bordered">
            <tr>
                <th>ID User</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Role Akses</th>
                <th>Aksi</th>
            </tr>
            <?php

            while ($row = $view->fetch_array()) { ?>

                <tr>
                    <td><?= $row['id_user'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['password'] ?></td>
                    <td><?= $row['nama_role'] ?></td>
                    <td>
                        <a href="/kasirv1/user_edit.php?id=<?= $row['id_user'] ?>">Edit</a> | <a href="/kasirv1/user_hapus.php?id=<?= $row['id_user'] ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                    </td>
                </tr>

            <?php }
            ?>

        </table>
    </div>
</body>

</html>