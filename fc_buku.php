<?php
include 'koneksi.php';
$nm_buku = $_POST["nm_buku"];
$penulis = $_POST["penulis"];
$penerbit = $_POST["penerbit"];
$kategori = $_POST["kategori"];
$status = $_POST["status"];
$updated = $_POST["updated"];

//script validasi data
$cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM buku WHERE nm_buku='$nm_buku'"));
if ($cek > 0) {
    echo "<script>window.alert('Data Sudah Tersedia')
    window.location='c_buku.php'</script>";
} else {
    mysqli_query($koneksi, "INSERT INTO buku VALUES('','$nm_buku','$penulis','$penerbit'.$kategori','$status',$updated')");
    echo "<script>window.alert('Data Berhasil Tersimpan')
    window.location='index.php'</script>";
}
