<?php
// Menghubungkan file ini dengan file database
include_once '../koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$telp = $_POST['telp'];
$level = $_POST['level'];

$cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbuser WHERE username='$username'"));
if ($cek > 0) {
    header("location:../signup.php?pesan=tersedia");
} else {
    // Query untuk memasukan data kedalam table
    $query = mysqli_query($koneksi, "INSERT INTO tbuser VALUES ('', '$username', '$password', '$telp','$level')");

    // Mengecek apakah data gagal diinput atau tidak
    if ($query) {
        header("location:../signup.php?pesan=berhasil");
    } else {
        header("location:../signup.php?pesan=gagal");
    }
}
//EOF