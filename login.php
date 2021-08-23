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
                            <img class="mb-4" src="images/favicon-96x96.png" alt="logo aplikasi" width="85" height="85">
                            <h6>Sign In</h6>
                            <?php
                            if (isset($_GET['pesan'])) {
                                if ($_GET['pesan'] == "gagal") {
                                    echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
                                }
                            }
                            ?>
                            <form action="ceklogin.php" method="post">
                                <input class="form-control" name="username" type="text" placeholder="Username">
                                <input class="form-control" name="password" type="password" placeholder="Password">
                                <div class="action">
                                    <button class="btn btn-primary" name="bsub" type="submit">Login</button>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="already">
                        <p>Don't have an account yet?</p>
                        <a href="signup.php">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>