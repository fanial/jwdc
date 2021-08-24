<?php

include_once 'layout/header_admin.php';
?>
<div class="page-content">
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="dashboard.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="buku.php"><i class="glyphicon glyphicon-book"></i> Data Buku</a></li>
                    <li><a href="anggota.php"><i class="glyphicon glyphicon-user"></i> Data Anggota</a></li>
                    <li><a href="tranksaksi.php"><i class="glyphicon glyphicon-list-alt"></i> Data Transaksi</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-box-large">
                        <div class="panel-heading">
                            <div class="panel-title">Data Buku</div>

                            <div class="panel-options">
                                <a href="create-buku.php" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php if (isset($_GET['pesan'])) { ?>
                                    <?php if ($_GET['pesan'] == "berhasil") { ?>
                                        <div class="alert alert-success" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            Berhasil Mengubah Data Buku
                                        </div>
                                    <?php } elseif ($_GET['pesan'] == "gagal") { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            Gagal Mengubah Data Buku
                                        </div>
                                    <?php } elseif ($_GET['pesan'] == "hapus") { ?>
                                        <div class="alert alert-success" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            Berhasil Menghapus Data Buku
                                        </div>
                                    <?php } elseif ($_GET['pesan'] == "gagalhapus") { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            Gagal Menghapus Data Buku
                                        </div>
                                    <?php } ?>
                                <?php } ?>

                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>No. </th>
                                            <th>Kode Buku</th>
                                            <th>Judul Buku</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Kategori</th>
                                            <th>Foto</th>
                                            <th>Status</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <?php
                                            include 'koneksi.php';
                                            $no = 1;
                                            $sql = 'SELECT * FROM tbbuku';
                                            $query = mysqli_query($koneksi, $sql);

                                            if (!$query) {
                                                die('SQL Error : ' . mysqli_error($koneksi));
                                            }
                                            while ($row = mysqli_fetch_array($query)) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?> </td>
                                            <td><?php echo $row['id_buku']; ?> </td>
                                            <td><?php echo $row['judul']; ?> </td>
                                            <td><?php echo $row['pengarang']; ?> </td>
                                            <td><?php echo $row['penerbit']; ?> </td>
                                            <td><?php echo $row['kategori']; ?> </td>
                                            <td><img src="<?php echo "images/".$row['foto'];?>" width="80px"></td>
                                            <td><?php echo $row['statusb']; ?> </td>
                                            <td>
                                                <a href=update-buku.php?id_buku=<?php echo $row['id_buku']; ?> class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
                                            </td>
                                            <td>
                                                <a href=pages/del-buku.php?id_buku=<?php echo $row['id_buku']; ?> class="btn btn-danger"> <i class="glyphicon glyphicon-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include_once 'layout/footer.php';
?>