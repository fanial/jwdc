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
                            <div class="panel-title">Tambah Data Buku</div>
                        </div>
                        <div class="panel-body">
                            <?php if (isset($_GET['pesan'])) { ?>
                                <?php if ($_GET['pesan'] == "berhasil") { ?>
                                    <div class="alert alert-success" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        Berhasil Menambahkan Data Buku
                                    </div>
                                <?php } elseif ($_GET['pesan'] == "gagal") { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        Gagal Menambahkan Data Buku
                                    </div>
                                <?php } elseif ($_GET['pesan'] == "tersedia") { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        Data Buku telah tersedia
                                    </div>
                                <?php } elseif ($_GET['pesan'] == "upload") { ?>
                                    <div class="alert alert-warning" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        Gagal upload file
                                    </div>
                                <?php } elseif ($_GET['pesan'] == "size") { ?>
                                    <div class="alert alert-warning" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        Size File Tidak Boleh Lebih Dari 2 MB
                                    </div>
                                <?php } ?>
                            <?php } ?>
                            <form class="form-horizontal" role="form" method="POST" action="pages/create-buku.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="id_buku" class="col-sm-2 control-label">Kode Buku</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="id_buku" id="id_buku" placeholder="Kode Buku" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="judul" class="col-sm-2 control-label">Judul Buku</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Buku" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="pengarang" class="col-sm-2 control-label">Pengarang Buku</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Pengarang Buku" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="penerbit" class="col-sm-2 control-label">Penerbit Buku</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Penerbit Buku" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="kategori" class="col-sm-2 control-label">Kategori Buku</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori Buku" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="foto" class="col-sm-2 control-label">Foto Buku</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="foto" id="foto" placeholder="Foto" required onchange="formValidasifoto(this.value);">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="statusb" class="col-sm-2 control-label">Status Buku</label>
                                    <div class="col-sm-10">
                                        <select class="selectpicker form-control" name="statusb" id="statusb" required>
                                            <option>Tersedia</option>
                                            <option>Tidak tersedia</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button onclick="return formValidasi()" type="submit" class="btn btn-primary" name="simpan"><i class="glyphicon glyphicon-save"></i> Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function formValidasi() {
        var id_buku = document.getElementById("id_buku").value.trim();
        var judul = document.getElementById("judul").value.trim();
        var pengarang = document.getElementById("pengarang").value.trim();
        var penerbit = document.getElementById("penerbit").value.trim();
        var foto = document.getElementById("foto").value.trim();
        var kategori = document.getElementById("kategori").value.trim();
        var statusb = document.getElementById("statusb").value.trim();

        if (id_buku != "" && judul != "" && pengarang != "" && penerbit != "" && foto != "" && kategori != "" && statusb != "") {
            return true;
        } else {
            alert('Anda harus mengisi data dengan lengkap!');
        }
    }

    function formValidasifoto() {
        var foto = document.getElementById("foto").value.trim();
        var allowed_extensions = new Array("jpg", "png", "jpeg");
        var file_extension = foto.split('.').pop().toLowerCase(); // split function will split the filename by dot(.), and pop function will pop the last element from the array which will give you the extension as well. If there will be no extension then it will return the filename.
        for (var i = 0; i <= allowed_extensions.length; i++) {
            if (allowed_extensions[i] == file_extension) {
                return true; // valid file extension
            }
        }
        alert('Format file salah! Gunakan ekstensi jpg, png, atau jpeg.');
        return false;
    }
</script>

<?php

include_once 'layout/footer.php';
?>