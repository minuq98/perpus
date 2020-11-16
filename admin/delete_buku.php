<?php
    include('../config/config.php');

    // var_dump($_POST)or die;
    if (isset( $_POST['submit'] ) ) {
        $kd_buku = $_POST['kd_buku'];
        //insert
        $query= query("delete from tbl_buku where kd_buku = $kd_buku");
        
        
        if ($query) {
            header('Location: ../admin/buku.php?status=sukses');
        } else{
            header('Location: ../admin/buku.php?status=gagal');
        }
    } else {
        die('akses dilarang');
    }