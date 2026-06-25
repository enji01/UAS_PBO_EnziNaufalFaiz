<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "db_uas_pbo_ti1d_enzinaufalfaiz";

$conn = mysqli_connect(
    $host,
    $username,
    $password,
    $database
);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}