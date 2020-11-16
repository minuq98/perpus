<?php
$DB = "perpus";
$HOST = "localhost";
$USERNAME = "root";
$PASSWORD = "";

//koneksi database
function connect_to_db()
{
	$connect_db = mysqli_connect($GLOBALS['HOST'],$GLOBALS['USERNAME'],$GLOBALS['PASSWORD'],$GLOBALS['DB']);

	if (!$connect_db) {
		die('Gagal Terkoneksi ke database :'.mysqli_error($connect_db));
	}
	return $connect_db;
}

//eksekusi query
function query($query)
{
	$conn = connect_to_db();

	//security
	if($data = mysqli_query($conn ,$query)){
		return $data;
	}
	else{
		die('<div class="alert alert-warning" role="alert">
		<strong>gagal eksekusi query</strong>
	</div>');
	}

}
function alert()
{
	if(isset($_GET['status'])){
                    
		if($_GET['status'] == 'sukses'){
			echo'<div class="alert alert-success" role="alert">
			<strong>Berhasil</strong>
			</div>';
		
		}elseif ($_GET['status']== 'duplikat') {
			echo'<div class="alert alert-warning" role="alert">
            <strong>Duplikat Gambar</strong>
        </div>';
		}
		 else { 
			echo '<div class="alert alert-warning" role="alert">
			<strong>Gagal</strong>
			</div>';
		}   
	}
}