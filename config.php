<?php

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "","perpus");

// function query($query) {
// 	global $conn;
// 	$result = mysqli_query($conn, $query);
// 	$rows = [];
// 	while( $row = mysqli_fetch_assoc($result)) {
// 		$rows[] = $row;
// 	}

// 	return $rows;
// }

// function tambah($data) {
// 	global $conn;

// 	$id_anggota = $data["id_anggota"];
// 	$nama = $data["nama"];
// 	$alamat = $data["alamat"];
// 	$no_telepon = $data["no_telepon"]

// 	$query = "INSERT INTO anggota 
// 	VALUES ('$id_anggota','$nama','$no_telepon','$alamat')";
// 	mysqli_query($conn, $query);

// 	return mysqli_affected_rows($conn);
// }


// function hapus($id_anggota) {
// 	global $conn;
// 	mysqli_query($conn, "DELETE FROM anggota WHERE id_anggota=$id_anggota");

// 	return mysqli_affected_rows($conn);
// }

?>