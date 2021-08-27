<?php
// Menghubungkan file ini dengan file database
include_once '../koneksi.php';

$id_anggota=$_POST['id_anggota'];
$id_user = $_POST['id_user'];
$nm_lengkap = $_POST['nm_lengkap'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];

$cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbanggota WHERE id_anggota='$id_anggota'"));
if ($cek > 0) {
    header("location:../create-anggota.php?pesan=tersedia");
} else {
    // Query untuk memasukan data kedalam table
    $query = mysqli_query($koneksi, "INSERT INTO tbanggota VALUES ('$id_anggota', '$id_user', '$nm_lengkap', '$jk','$alamat', '$status')");

    // Mengecek apakah data gagal diinput atau tidak
    if ($query) {
        header("location:../create-anggota.php?pesan=berhasil");
    } else {
        header("location:../create-anggota.php?pesan=gagal");
    }
}
//EOF