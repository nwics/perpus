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
		<a href="tambah_anggota.php" class="btn btn-primary btn-md mb-3">Tambah Anggota</a>
		<table class="table table-striped table-hover table-bordered ">
			<thead class="table-dark">
				<th>ID Anggota</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>NO Telepon</th>
				<th>Aksi</th>
			</thead>
			<?php
				$sqlGet = "SELECT * FROM anggota ";
				$query = mysqli_query($conn, $sqlGet);

				while($data = mysqli_fetch_array($query)) {
					echo "
					<tbody>
						<tr>
							<td>$data[id_anggota]</td>
							<td>$data[nama]</td>
							<td>$data[alamat]</td>
							<td>$data[no_telepon]</td>
							<td>
								<div class='row'>
									<div class='col d-flex justify-content-center'>
										<a href='updateAnggota.php?id_anggota=$data[id_anggota]' class='btn btn-sm btn-warning'>Update</a>
									</div>
									<div class='col d-flex justify-content-center'>
										<a href='delete_anggota.php?id_anggota=$data[id_anggota]' class='btn btn-sm btn-danger'>Delete</a>
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