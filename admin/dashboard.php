<?php
 session_start();
if ($_SESSION['status'] !="login" ) {
    header('location:../index.php?status=login');
}
include_once "header.php" ?>
<h1>Selamat datang admin.</h1>
<?php  include_once "footer.php" ?>