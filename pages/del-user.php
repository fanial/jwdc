<?php

include '../koneksi.php';

// menangkap data id yang di kirim dari url
$id_user = $_GET['id_user'];

// menghapus data dari database
$query=mysqli_query($koneksi,"DELETE FROM tbuser WHERE id_user='$id_user'");

if ($query) {
    header("location:../user.php?pesan=hapus");
}else{
    header("location:../user.php?pesan=gagalhapus");
}

//EOF