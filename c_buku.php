<?php include("layout/header.php") ?>
<?php include("layout/navbar.php") ?>
<div class="row">
    <!-- content -->
    <div class="main col-12 col-md-8 ">

        <div class="card">
            <h5 class="card-header">Tambah Buku</h5>
            <div class="card-body">
                <h5 class="card-title">Isi form dibawah ini untuk menambahkan buku kedalam list</h5>

                <form action="fc_buku.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="nm_buku" class="col-sm-2 col-form-label">Nama Buku</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nm_buku" placeholder="Nama Buku">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="penulis" placeholder="Penulis">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="penerbit" placeholder="Penerbit">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kategori" placeholder="Kategori">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select name="status" class="form-control" id="status" required>
                                <option disable selected> Pilih Status</option>
                                <?php

                                ?>
                                <option value="tersedia">Tersedia</option>
                                <option value="tidak tersedia">Tidak Tersedia</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="updated" class="col-sm-2 col-form-label">Tanggal Update</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="updated" placeholder="Tanggal Update">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="upload" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end of content -->

    <?php include("layout/sidebar.php") ?>
    <?php include("layout/footer.php") ?>