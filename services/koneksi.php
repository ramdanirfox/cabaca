<?php

require 'konstan.php';
$koneksi = mysqli_connect(hostname, username, password, database);

if (mysqli_errno($koneksi)) {
    echo "Gagal koneksi ke database";
    exit;
}
?>