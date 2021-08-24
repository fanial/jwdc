<?php
// Menghubungkan file ini dengan file database
include '../koneksi.php';

// Mengambil data dari form lalu ditampung didalam variabel
$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$kategori = $_POST['kategori'];
$foto = $_FILES['foto']['name'];
$statusb = $_POST['statusb'];
$foto_size = $_FILES['foto']['size'];
$temp   = $_FILES['foto']['tmp_name'];
$fotobaru = date('dmYHis') . $foto;

$path = "../images/" . $fotobaru;

// Mengecek apakah file lebih besar 2 MB atau tidak
if ($foto_size > 2097152) {
    // Jika File lebih dari 2 MB maka akan gagal mengupload File
    header("location:../create-buku.php?pesan=size");
} else {
    // Mengecek apakah Ada file yang diupload atau tidak
    if ($foto != "") {

        // Ekstensi yang diperbolehkan untuk diupload boleh diubah sesuai keinginan
        $ekstensi_izin = array('png', 'jpg', 'jepg');
        // Memisahkan nama file dengan Ekstensinya
        $pisahkan_ekstensi = explode('.', $foto);
        $ekstensi = strtolower(end($pisahkan_ekstensi));
        // Mengecek apakah Ekstensi file sesuai dengan Ekstensi file yg diuplaod
        if (in_array($ekstensi, $ekstensi_izin) === true) {
            if (move_uploaded_file($temp, $path)) {
                $cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbbuku WHERE id_buku='$id_buku'"));
                if ($cek > 0) {
                    header("location:../create-buku.php?pesan=tersedia");
                } else {
                    // Query untuk memasukan data kedalam table
                    $query = mysqli_query($koneksi, "INSERT INTO tbbuku VALUES ('$id_buku', '$judul', '$pengarang', '$penerbit','$kategori', '$fotobaru', '$statusb')");

                    // Mengecek apakah data gagal diinput atau tidak
                    if ($query) {
                        header("location:../create-buku.php?pesan=berhasil");
                    } else {
                        header("location:../create-buku.php?pesan=gagal");
                    }
                }
            } else {
                header("location:../create-buku.php?pesan=upload");
            }
        } else {
            header("location:../create-buku.php?pesan=upload");
        }
    } else {
        header("location:../create-buku.php?pesan=upload");
    }
}

//EOF