<?php

include '../koneksi.php';

// menangkap data id yang di kirim dari url
$id_anggota = $_GET['id_anggota'];

// menghapus data dari database
$query=mysqli_query($koneksi,"DELETE FROM tbanggota WHERE id_anggota='$id_anggota'");

if ($query) {
    header("location:../anggota.php?pesan=hapus");
}else{
    header("location:../anggota.php?pesan=gagalhapus");
}

//EOF