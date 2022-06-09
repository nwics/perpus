<?php 	

require 'config.php'; 
// $tabel_anggota = query("SELECT * FROM anggota");

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
		<form action="tambah_buku.php" method="post">
			<label for="id_buku">ID BUKU</label>
			<input type="text" id="id_buku" name="id_buku" class="form-control">

			<label for="id_penerbit">ID Penerbit</label>
			<input type="text" id="id_penerbit" name="id_penerbit" class="form-control">

			<label for="judul">Judul</label>
			<input type="text" id="judul" name="judul" class="form-control">

			<label for="pengarang">Pengarang</label>
			<input type="text" id="pengarang" name="pengarang" class="form-control">

			<input class= "btn btn-success mt-3" type="submit" name="submit" value="TAMBAH DATA">
			
		</form>
	</div>	
 <?php

	if (isset($_POST['submit'])) {
		$id_buku = $_POST['id_buku']; 

		$id_penerbit = $_POST['id_penerbit'];
		$judul = $_POST['judul'];
		$pengarang = $_POST['pengarang'];
	
		$sqlGot = "SELECT * FROM book WHERE id_buku='$id_buku'";
		$queryGot = mysqli_query($conn,$sqlGot);
		$check = mysqli_num_rows($queryGot);

		$sqlInsort = "INSERT INTO book(id_buku,id_penerbit,judul,pengarang)
					VALUES ('$id_buku','$id_penerbit','$judul','$pengarang')";

		$queryInsort = mysqli_query($conn,$sqlInsort);
		
		
		if ( isset($sqlInsort) && $check <= 0 && $queryInsort) {
			echo "
			<div class= 'alert alert-success'> DATA BERHASIL DITAMBAHKAN <a href='buku.php'>LIHAT</a></div>
			";
		echo "id_buku: $id_buku";
		
		} else if ($check > 0) {
			echo "
			<div class= 'alert alert-danger'> DATA GAGAL DITAMBAHKAN <a href='buku.php'>LIHAT</a></div>
			";
		}
		
	}
?>
</body>
</html>