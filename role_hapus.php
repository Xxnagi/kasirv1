<?php
// session_start();
include 'config.php';
include 'authcheck.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    mysqli_query($dbconnect, "DELETE FROM role WHERE id_role='$id'");

    header("location:role.php");
}

?>