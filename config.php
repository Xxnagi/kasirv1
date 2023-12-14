<?php
$host = "localhost";
$user = "root";
$pass = "mysql123";
$db = "kasirv1";

$dbconnect = new mysqli("$host", "$user", "$pass", "$db");

if ($dbconnect->connect_error) {
    echo "Koneksi gagal -> " . $dbconnect->connect_error;
}
