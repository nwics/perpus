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
	
	<div class="container mt-5">
		<a href="tambah_buku.php" class="btn btn-primary btn-md mb-3">Tambah Buku</a>
		<table class="table table-striped table-hover table-bordered ">
			<thead class="table-dark">
				<th>ID Buku</th>
				<!-- <th>ID Kategori BUKU</th> -->
				<th>ID Penerbit</th>
				<th>Judul</th>
				<th>Pengarang</th>
				<th>Aksi</th>
			</thead>
			<?php
				$sqlGot = "SELECT * FROM book ";
				$query = mysqli_query($conn, $sqlGot);

				while($data = mysqli_fetch_array($query)) {
					echo "
					<tbody>
						<tr>
							<td>$data[id_buku]</td>
							<td>$data[id_penerbit]</td>
							<td>$data[judul]</td>
							<td>$data[pengarang]</td>
							<td>
								<div class='row'>
									<div class='col d-flex justify-content-center'>
										<a href='updateBuku.php?id_anggota=$data[id_buku]' class='btn btn-sm btn-warning'>Update</a>
									</div>
									<div class='col d-flex justify-content-center'>
										<a href='delete_buku.php?id_anggota=$data[id_buku]' class='btn btn-sm btn-danger'>Delete</a>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
					";
				}
			
			?>

		</table>
	</div>
 
</body>
</html>