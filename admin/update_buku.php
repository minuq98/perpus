<?php
    include('../config/config.php');
    // var_dump($_POST) or die;
    if (isset( $_POST['submit'] ) ) {
         
        $isbn=$_POST['isbn'];
        $kd_buku=$_POST['kd_buku'];
        $judul=$_POST['judul'];
        $penulis=$_POST['penulis'];
        $penerbit=$_POST['penerbit'];
        $tahun=$_POST['tahun'];
        $jumlah=$_POST['jumlah'];

        $sql= "update tbl_buku set isbn=$isbn,
        judul='$judul',jumlah=$jumlah,penulis='$penulis',penerbit='$penerbit',tahun=$tahun,penulis='$penulis' where kd_buku = $kd_buku";

        //insert
        $query = query($sql);
        if ($query) {
            header('Location: buku.php?status=sukses');
        } else{
            header('Location: buku.php?status=gagal');
        }
    } else {
        die('akses dilarang');
    }