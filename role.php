<?php

include 'config.php';
// session_start();

include 'authcheck.php';

$view = $dbconnect->query("SELECT * FROM role");

?>

<!DOCTYPE html>
<html>

<head>
    <title>List Role</title>
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

        <h1>List Role</h1>
        <a href="/kasirv1/role_add.php" class="btn btn-primary">Tambah data</a>
        <table class="table table-bordered">
            <tr>
                <th>ID Role</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
            <?php

            while ($row = $view->fetch_array()) { ?>

                <tr>
                    <td><?= $row['id_role'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td>
                        <a href="/kasirv1/role_edit.php?id=<?= $row['id_role'] ?>">Edit</a> | <a href="/kasirv1/role_hapus.php?id=<?= $row['id_role'] ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                    </td>
                </tr>

            <?php }
            ?>

        </table>
    </div>
</body>

</html>