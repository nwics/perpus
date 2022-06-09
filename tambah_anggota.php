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
		<a href="anggota.php">KEMBALI</a>
		<form action="tambah_anggota.php" method="post">
			<label for="id_anggota">ID ANGGOTA</label>
			<input type="text" id="id_anggota" name="id_anggota" class="form-control">

			<label for="nama">NAMA</label>
			<input type="text" id="nama" name="nama" class="form-control">

			<label for="alamat">ALAMAT</label>
			<input type="text" id="alamat" name="alamat" class="form-control">

			<label for="no_telepon">NO TELEPON</label>
			<input type="text" id="no_telepon" name="no_telepon" class="form-control">

			<input class= "btn btn-success mt-3" type="submit" name="submit" value="TAMBAH DATA">
		</form>
	</div>	
 <?php

	if (isset($_POST['submit'])) {
		$id_anggota = $_POST['id_anggota']; 
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$no_telepon = $_POST['no_telepon'];
	
		$sqlGet = "SELECT * FROM anggota WHERE id_anggota='$id_anggota'";
		$queryGet = mysqli_query($conn,$sqlGet);
		$cek = mysqli_num_rows($queryGet);

		$sqlInsert = "INSERT INTO anggota(id_anggota,nama,alamat,no_telepon)
					VALUES ('$id_anggota','$nama','$alamat','$no_telepon')";

		$queryInsert = mysqli_query($conn,$sqlInsert);
		
		if ( isset($sqlInsert) && $cek <= 0 && $queryInsert) {
			echo "
			<div class= 'alert alert-success'> DATA BERHASIL DITAMBAHKAN <a href='anggota.php'>LIHAT</a></div>
			";

		} else if ($cek > 0) {
			echo "
			<div class= 'alert alert-danger'> DATA GAGAL DITAMBAHKAN <a href='anggota.php'>LIHAT</a></div>
			";
		}

	}
 	
 ?>
</body>


</html>