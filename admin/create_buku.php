<?php
    include('../config/config.php');

    if (isset( $_POST['submit'] ) ) {
        $isbn=$_POST['isbn'];
        $judul=$_POST['judul'];
        $penulis=$_POST['penulis'];
        $penerbit=$_POST['penerbit'];
        $tahun=$_POST['tahun'];
        $jumlah=$_POST['jumlah'];

        //insert
        $query = query("insert into tbl_buku(isbn,judul,penulis,penerbit,tahun,jumlah)
        value($isbn,'$judul','$penulis','$penerbit',$tahun,$jumlah)");
    
            header('Location: buku.php?status=sukses');
        
    } else {
        die('akses dilarang');
    }