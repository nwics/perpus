<?php 	

require 'config.php'; 
// $tabel_anggota = query("SELECT * FROM anggota");
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    $id_buku = $_GET['id_buku'];
    $sqlGet = "SELECT * FROM book WHERE id_buku='$id_buku'";
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
		<a href="buku.php">KEMBALI</a>
		<form action="updateBuku.php" method="post">
			<label for="id_buku">ID BUKU</label>
			<input type="text" id="id_buku" name="id_buku" value="<?php echo "$data[id_buku]";?>" class="form-control">

			<label for="id_penerbit">ID Penerbit</label>
			<input type="text" id="id_penerbit" name="id_penerbit" value="<?php echo "$data[id_penerbit]";?>" class="form-control">

			<label for="judul">JUDUL</label>
			<input type="text" id="judul" name="judul" value="<?php echo "$data[judul]";?>" class="form-control">

			<label for="pengarang">PENGARANG</label>
			<input type="text" id="pengarang" name="pengarang" value="<?php echo "$data[pengarang]";?>" class="form-control">

			<input class= "btn btn-success mt-3" type="submit" name="submit" value="TAMBAH DATA">
		</form>
	</div>	
 <?php

	if (isset($_POST['submit'])) {
		$id_buku = $_POST['id_buku']; 
		$id_penerbit = $_POST['id_penerbit'];
		$judul = $_POST['judul'];
		$pengarang = $_POST['pengarang'];

	}
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    $sqlUpdate = "UPDATE book SET id_penerbit='$id_penerbit', judul='$judul', pengarang='$pengarang'
    WHERE id_buku='$id_buku'";
    $queryUpdate = mysqli_query($conn, $sqlUpdate);

    // header("location: anggota.php");

 ?>
</body>


</html>