<?php
$koneksi = mysqli_connect(
    "localhost",
    "root",
    "Vsg4F4n1T3lu!",
    "perpus"
);
if (!$koneksi) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
