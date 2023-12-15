<?php

include 'config.php';

include 'authcheck.php';

require 'config.php';
$view = $dbconnect->query("SELECT * FROM barang");

?>

<!DOCTYPE html>
<html>

<head>
    <title>List Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="container">

        <?php if (isset($_SESSION['success']) && $_SESSION['success'] != '') { ?>

            <div class="alert alert-success" role="alert">
                <?= $_SESSION['success'] ?>
            </div>
        <?php
        }
        $_SESSION['success'] = '';
        ?>

        <h1>List Barang</h1>
        <a href="/kasirv1/barang_add.php" class="btn btn-primary">Tambah data</a>
        <table class="table table-bordered mt-2">
            <tr>
                <th>ID Barang</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Jumlah Stok</th>
                <th>Aksi</th>
            </tr>
            <?php

            while ($row = $view->fetch_array()) { ?>

                <tr>
                    <td><?= $row['id_barang'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['harga'] ?></td>
                    <td><?= $row['jumlah'] ?></td>
                    <td>
                        <a href="/kasirv1/barang_edit.php?id=<?= $row['id_barang'] ?>">Edit</a> | <a href="/kasirv1/barang_hapus.php?id=<?= $row['id_barang'] ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                    </td>
                </tr>

            <?php }
            ?>

        </table>
    </div>
</body>

</html>