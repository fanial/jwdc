<?php include("layout/header.php") ?>
<?php include("layout/navbar.php") ?>

<?php
include 'koneksi.php';
session_start();
// Untuk mengcek apakah yang mengakses halaman ini sudah login atau belum

// if ($_SESSION['level'] == "") {
//   header("location:index.php?pesan=gagal");
// }

?>
<div class="row">
  <!-- content -->
  <div class="main col-12 col-md-8 ">
    <h1>Daftar Buku</h1>
    <div class="card-deck">
      <?php
      $sql = 'SELECT * FROM buku';
      $query = mysqli_query($koneksi, $sql);

      if (!$query) {
        die('SQL Error : ' . mysqli_error($koneksi));
      }
      while ($row = mysqli_fetch_array($query)) { ?>

        <div class="card">
          <img class="card-img-top" src="images/favicon-96x96.png" width="100px" height="auto" alt="Card image cap">
          <div class="card-body">

            <h5 class="card-title"><?php echo $row['nm_buku']; ?></h5>
            <p class="card-text">
              Penerbit <?php echo $row['penerbit']; ?>, Penulis <?php echo $row['penulis']; ?>, Status <?php echo $row['status']; ?>
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted"><?php echo $row['updated']; ?></small>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>
  <!-- end of content -->

  <?php include("layout/sidebar.php") ?>
  <?php include("layout/footer.php") ?>