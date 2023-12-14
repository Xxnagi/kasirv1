<?php
// session_start();

include 'authcheck.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kasir V1</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<div class = "container">
    <h1>Selamat Datang</h1>
    <a href = "/kasirv1/barang.php">Barang</a> | <a href = "/kasirv1/role.php">Role</a> | <a href = "/kasirv1/user.php">User</a> | <a href="logout.php">Logout</a>
</div>
</body>
</html>
