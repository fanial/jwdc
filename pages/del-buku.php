<?php 
include '../koneksi.php';
if (isset($_GET['id_buku'])) {
	if ($_GET['id_buku'] != "") {
		
		// Mengambil ID diURL
		$id = $_GET['id_buku'];

		// Mengambil data  didalam table siswa
		$get_foto = "SELECT foto FROM tbbuku WHERE id_buku='$id'";
		$data_foto = mysqli_query($koneksi, $get_foto); 
        // Mengubah data yang diambil menjadi Array
		$foto_lama = mysqli_fetch_array($data_foto);

        // Menghapus Foto lama didalam folder FOTO
		unlink("../images/".$foto_lama['foto']);    

		// Mengapus data berdasarkan ID
		$query = mysqli_query($koneksi,"DELETE FROM tbbuku WHERE id_buku='$id'");
		if ($query) {
			header("location:../buku.php?pesan=hapus");
		}else{
			header("location:../buku.php?pesan=gagalhapus");
		}
		
	}else{
		// Apabila ID nya kosong maka akan dikembalikan
		header("location:../buku.php");
	}
}else{
	// Jika tidak ada Data ID maka akan dikembalikan kehalaman
	header("location:../buku.php");
}

//EOF