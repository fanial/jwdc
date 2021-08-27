<?php

session_start();
// Untuk mengcek apakah yang mengakses halaman ini sudah login atau belum

if ($_SESSION['level'] == "") {
    header("location:login.php?pesan=gagal");
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Sipus E-Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <!-- Logo -->
                    <div class="logo">
                        <h1><a href="index.html">Sipus E-Book</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>