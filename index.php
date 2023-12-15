<?php
// session_start();

include 'authcheck.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Kasir V1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-3">
        <div class="row gap-3">
            <div class="card col" style="width: 18rem;">

                <div class="card-body">
                    <h5 class="card-title">Barang</h5>
                    <a href="barang.php" class="btn btn-primary btn-sm">Lihat</a>
                </div>
            </div>
            <div class="card col" style="width: 18rem;">

                <div class="card-body">
                    <h5 class="card-title">Role</h5>
                    <a href="role.php" class="btn btn-primary btn-sm">Lihat</a>
                </div>
            </div>
            <div class="card col" style="width: 18rem;">

                <div class="card-body">
                    <h5 class="card-title">User</h5>
                    <a href="user.php" class="btn btn-primary btn-sm">Lihat</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>