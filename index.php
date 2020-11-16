<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>
    <br><br><br><br><br><br>
    <div class="container ">
        <div class="jumbotron">
            <h1 class="display-4">Login</h1>

            <?php  if(isset($_GET['status']) && $_GET['status']=="login" ) {?>
            <div class="alert alert-warning" role="alert">
                <strong>Akses ditolak</strong>

            </div>
            <?php } elseif (isset($_GET['status']) && $_GET['status']=="salah") { ?>
            <div class="alert alert-info" role="alert">
                <strong>NIK atau Passord salah</strong>

            </div>
            <?php  } ?>
            <hr class="my-4">
            <form action="config/login.php" method="post">
                <label>NIP <input class="form-control" type="text" name="kd_petugas"></label>

                <br>
                <label>Password <input class="form-control" type="password" name="password"></label>
                <br>
                <input type="submit">
            </form>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>