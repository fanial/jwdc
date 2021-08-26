<!DOCTYPE html>
<html>

<head>
    <title>Sipus E-book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script> -->

</head>

<body class="login-bg">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Logo -->
                    <div class="logo">
                        <h1><a href="#">Sipus E-Book</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-wrapper">
                    <div class="box">
                        <div class="content-wrap">
                            <h6>Sign Up</h6>
                            <?php if (isset($_GET['pesan'])) { ?>
                                <?php if ($_GET['pesan'] == "berhasil") { ?>
                                    <div class="alert alert-success" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        Berhasil membuat akun, silahkan login mengunakan akun yang sudah dibuat.
                                    </div>
                                <?php } elseif ($_GET['pesan'] == "gagal") { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        Gagal membuat akun
                                    </div>
                                <?php } elseif ($_GET['pesan'] == "tersedia") { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        Username telah tersedia
                                    </div>
                                <?php } ?>
                            <?php } ?>
                            <form action="pages/cek-signup.php" method="post">
                                <input class="form-control" name="username" type="text" placeholder="Username" required>
                                <input class="form-control" name="password" type="password" placeholder="Password" required>
                                <input class="form-control" name="telp" type="number" placeholder="No. Telephone" required>
                                <input class="form-control" type="hidden" name="level" type="text" value="anggota" required>
                                <div class="action">
                                    <button class="btn btn-primary signup" type="submit">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="already">
                        <p>Have an account already?</p>
                        <a href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function formValidasi() {
            var username = document.getElementById("username").value.trim();
            var password = document.getElementById("password").value.trim();
            var telp = document.getElementById("telp").value.trim();

            if (username != "" && password != "" && telp != "") {
                return true;
            } else {
                alert('Anda harus mengisi data dengan lengkap!');
            }
        }
    </script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>