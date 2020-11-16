<?php 
 include('config.php');
$kd_petugas = $_POST['kd_petugas'];
$password = md5($_POST['password']);

$login = query("select * from tbl_petugas where kd_petugas='$kd_petugas' and password='$password'");
$cek=mysqli_num_rows($login);
$level = mysqli_fetch_assoc($login);

if ($cek > 0  ) {
    session_start();
    $_SESSION['kd_petugas'] = $kd_petugas;
    $_SESSION['status'] = "login";
 
    header("location:../admin/dashboard.php");

} else {
    header("location:../index.php?status=salah");
}