<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"
        rel="stylesheet" />

    <title>Title</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">Perpustakaan</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item">
                    <a class="nav-link text-success" href="buku.php">Data Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success" href="anggota.php">Data Anggota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success" href="petugas.php">Data Petugas</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="../config/logout.php" class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i
                        class="fa fa-door-open" alt='Log Out'></i>
                    Log Out</a>
            </form>
        </div>
    </nav>
    <div class="container   ">
        <div class='col-12 m-5 text-secondary'>
            <div class="jumbotron">