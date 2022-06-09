<?php 	

require 'config.php'; 
// $tabel_anggota = query("SELECT * FROM anggota");
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    $id_anggota = $_GET['id_anggota'];
    $sqlGet = "SELECT * FROM anggota WHERE id_anggota='$id_anggota'";
    $queryGet = mysqli_query($conn, $sqlGet);
    $data = mysqli_fetch_array($queryGet);
 ?>


<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Halaman Admin</title>
</head>
<body>
	<div class="w-50 mx-auto border p-3 mt-5">
		<a href="anggota.php">KEMBALI</a>
		<form action="updateAnggota.php" method="post">
			<label for="id_anggota">ID ANGGOTA</label>
			<input type="text" id="id_anggota" name="id_anggota" value="<?php echo "$data[id_anggota]";?>" class="form-control">

			<label for="nama">NAMA</label>
			<input type="text" id="nama" name="nama" value="<?php echo "$data[nama]";?>" class="form-control">

			<label for="alamat">ALAMAT</label>
			<input type="text" id="alamat" name="alamat" value="<?php echo "$data[alamat]";?>" class="form-control">

			<label for="no_telepon">NO TELEPON</label>
			<input type="text" id="no_telepon" name="no_telepon" value="<?php echo "$data[no_telepon]";?>" class="form-control">

			<input class= "btn btn-success mt-3" type="submit" name="submit" value="TAMBAH DATA">
		</form>
	</div>	
 <?php

	if (isset($_POST['submit'])) {
		$id_anggota = $_POST['id_anggota']; 
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$no_telepon = $_POST['no_telepon'];

	}
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    $sqlUpdate = "UPDATE anggota SET nama='$nama', alamat='$alamat', no_telepon='$no_telepon'
    WHERE id_anggota='$id_anggota'";
    $queryUpdate = mysqli_query($conn, $sqlUpdate);

    // header("location: anggota.php");

 ?>
</body>


</html>