<?php
 session_start();
if ($_SESSION['status'] !="login" ) {
    header('location:../index.php?status=login');
}
include_once "header.php";
include_once "../config/config.php"
?>
<h1>Data Buku</h1>
<?php  alert() ?>
<!-- <div class="container"> -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" title='Tambah data' data-toggle="modal" data-target="#tambah">
    <i class="fa fa-plus"></i> Tambah data
</button>
<br><br>
<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="create_buku.php" enctype="multipart/form-data" method="post">
                <div class="modal-body">
                    <div class="container-fluid">

                        <label>ISBN</label>
                        <input type="number" name="isbn" class="form-control" required>
                        <label>Judul Buku</label>
                        <input type="text" name="judul" class="form-control" required>
                        <label>Penulis Buku</label>
                        <input type="text" name="penulis" class="form-control" required>
                        <label>Penerbit Buku</label>
                        <input type="text" name="penerbit" class="form-control" required>
                        <label>Tahun</label>
                        <input type="number" name="tahun" class="form-control" required>
                        <label>Jumlah Buku</label>
                        <input type="int" name="jumlah" class="form-control" required>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<table border=1 id="example" class="table table-striped table-bordered" style="width:100%">
    <thead class="thead-dark">
        <th>No</th>
        <th>Kode</th>
        <th>ISBN</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun</th>
        <th>Jumlah</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php
                $sql = query("SELECT * FROM tbl_buku "); 
                $a = 1;
                while($row = mysqli_fetch_array($sql)){
              
            ?>
        <tr>
            <td><?= $a++ ?></td>
            <td><?= $row['kd_buku'] ?></td>
            <td><?= $row['isbn'] ?></td>
            <td><?= $row['judul'] ?></td>
            <td><?= $row['penulis'] ?></td>
            <td><?= $row['penerbit'] ?></td>
            <td><?= $row['tahun'] ?></td>
            <td><?= $row['jumlah'] ?></td>

            <td>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal"
                    data-target="#delete<?= $row['kd_buku']  ?>" title="Hapus data">
                    <i class="fa fa-trash-alt"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="delete<?= $row['kd_buku']  ?>" tabindex="-1" role="dialog"
                    aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="delete_buku.php" method="post">
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        Apakah anda yakin ingin menghapus data ini ?
                                        <input type="number" name="kd_buku" value="<?=  $row['kd_buku'] ?>" hidden>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input class='btn btn-danger' type="submit" name='submit' value="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <button data-toggle="modal" data-target="#update<?= $row['kd_buku']  ?>" title="Update data"
                    class="btn btn-warning"><i class="fa fa-edit"></i></button>


                <div class="modal fade" id="update<?= $row['kd_buku']?>" tabindex="-1" role="dialog"
                    aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="update_buku.php" enctype="multipart/form-data" method="post">
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <input type="number" name="kd_buku" value="<?=  $row['kd_buku'] ?>" hidden>

                                        <label>ISBN</label>
                                        <input type="number" name="isbn" class="form-control"
                                            value="<?=  $row['isbn'] ?>" required>
                                        <label>Judul Buku</label>
                                        <input type="text" name="judul" class="form-control"
                                            value="<?=  $row['judul'] ?>" required>
                                        <label>Penulis Buku</label>
                                        <input type="text" name="penulis" class="form-control"
                                            value="<?=  $row['penulis'] ?>" required>
                                        <label>Penerbit Buku</label>
                                        <input type="text" name="penerbit" class="form-control"
                                            value="<?=  $row['penerbit'] ?>" required>
                                        <label>Tahun</label>
                                        <input type="text" id="datepicker" name="tahun" class="form-control"
                                            value="<?=  $row['tahun'] ?>" required>
                                        <label>Jumlah Buku</label>
                                        <input type="number" name="jumlah" class="form-control"
                                            value="<?=  $row['jumlah'] ?>" required>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input class="btn btn-warning" type="submit" name="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </td>
        </tr>

    </tbody>
</table>


<?php  include_once "footer.php" ?>